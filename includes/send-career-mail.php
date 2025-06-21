<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $position = filter_var($_POST['position'], FILTER_SANITIZE_STRING);
    $experience = filter_var($_POST['experience'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $portfolio = isset($_POST['portfolio']) ? filter_var($_POST['portfolio'], FILTER_VALIDATE_URL) : '';
    $github = isset($_POST['github']) ? filter_var($_POST['github'], FILTER_VALIDATE_URL) : '';
    $tech_stack = isset($_POST['tech_stack']) ? filter_var($_POST['tech_stack'], FILTER_SANITIZE_STRING) : '';

    // Validate required fields
    if (!$name || !$email || !$phone || !$position || !$experience || !$message) {
        header("Location: ../career/?error=missing_fields");
        exit();
    }

    // Handle file upload
    $resume_uploaded = false;
    $upload_path = '';
    
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
        $allowed_types = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        $file_type = $_FILES['resume']['type'];
        $file_size = $_FILES['resume']['size'];
        $max_size = 5 * 1024 * 1024; // 5MB

        if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
            $upload_dir = '../uploads/resumes/';
            
            // Create directory if it doesn't exist
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            
            $file_extension = pathinfo($_FILES['resume']['name'], PATHINFO_EXTENSION);
            $new_filename = 'resume_' . $name . '_' . $position . '_' . date('Y-m-d_H-i-s') . '.' . $file_extension;
            $upload_path = $upload_dir . $new_filename;
            
            if (move_uploaded_file($_FILES['resume']['tmp_name'], $upload_path)) {
                $resume_uploaded = true;
            }
        }
    }

    // Position titles mapping
    $position_titles = [
        'flutter-developer' => 'Flutter Developer',
        'backend-developer' => 'Backend Developer'
    ];
    
    $position_title = isset($position_titles[$position]) ? $position_titles[$position] : ucfirst(str_replace('-', ' ', $position));

    // Email configuration
    $to = "careers@pixelkrafts.in"; // Change this to your career email
    $subject = "New Job Application - $position_title - $name";
    
    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";

    // Email body
    $email_body = "
    <html>
    <head>
        <title>New Job Application - $position_title</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background: linear-gradient(135deg, #8764ff 0%, #6e4beb 100%); color: white; padding: 20px; text-align: center; }
            .content { background: #f9f9f9; padding: 30px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #8764ff; }
            .value { margin-top: 5px; }
            .footer { background: #333; color: white; padding: 15px; text-align: center; font-size: 12px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h1>New Job Application</h1>
                <h2>$position_title Position</h2>
            </div>
            
            <div class='content'>
                <div class='field'>
                    <div class='label'>Applicant Name:</div>
                    <div class='value'>$name</div>
                </div>
                
                <div class='field'>
                    <div class='label'>Email Address:</div>
                    <div class='value'>$email</div>
                </div>
                
                <div class='field'>
                    <div class='label'>Phone Number:</div>
                    <div class='value'>$phone</div>
                </div>
                
                <div class='field'>
                    <div class='label'>Position Applied For:</div>
                    <div class='value'>$position_title</div>
                </div>
                
                <div class='field'>
                    <div class='label'>Years of Experience:</div>
                    <div class='value'>$experience</div>
                </div>";

    if ($tech_stack) {
        $email_body .= "
                <div class='field'>
                    <div class='label'>Primary Tech Stack:</div>
                    <div class='value'>$tech_stack</div>
                </div>";
    }

    if ($portfolio) {
        $email_body .= "
                <div class='field'>
                    <div class='label'>Portfolio/GitHub URL:</div>
                    <div class='value'><a href='$portfolio' target='_blank'>$portfolio</a></div>
                </div>";
    }

    if ($github) {
        $email_body .= "
                <div class='field'>
                    <div class='label'>GitHub Profile:</div>
                    <div class='value'><a href='$github' target='_blank'>$github</a></div>
                </div>";
    }

    $email_body .= "
                <div class='field'>
                    <div class='label'>Cover Letter / Message:</div>
                    <div class='value'>" . nl2br($message) . "</div>
                </div>
                
                <div class='field'>
                    <div class='label'>Resume:</div>
                    <div class='value'>" . ($resume_uploaded ? "Resume uploaded successfully. File: $new_filename" : "No resume uploaded or upload failed.") . "</div>
                </div>
                
                <div class='field'>
                    <div class='label'>Application Date:</div>
                    <div class='value'>" . date('F j, Y \a\t g:i A') . "</div>
                </div>
            </div>
            
            <div class='footer'>
                <p>This application was submitted through the PixelKrafts career page.</p>
                <p>Please respond to the applicant within 48 hours.</p>
            </div>
        </div>
    </body>
    </html>";

    // Send email
    if (mail($to, $subject, $email_body, $headers)) {
        // Save application data to a file for backup
        $application_data = [
            'timestamp' => date('Y-m-d H:i:s'),
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'position' => $position_title,
            'experience' => $experience,
            'tech_stack' => $tech_stack,
            'portfolio' => $portfolio,
            'github' => $github,
            'message' => $message,
            'resume_file' => $resume_uploaded ? $new_filename : 'Not uploaded'
        ];
        
        $log_file = '../career_applications.txt';
        $log_entry = date('Y-m-d H:i:s') . " - New application from $name for $position_title position\n";
        $log_entry .= "Details: " . json_encode($application_data) . "\n\n";
        file_put_contents($log_file, $log_entry, FILE_APPEND | LOCK_EX);
        
        // Redirect to success page
        if ($position == 'flutter-developer') {
            header("Location: ../career/flutter-developer.php?success=1");
        } elseif ($position == 'backend-developer') {
            header("Location: ../career/backend-developer.php?success=1");
        } else {
            header("Location: ../career/?success=1");
        }
    } else {
        // Redirect to error page
        if ($position == 'flutter-developer') {
            header("Location: ../career/flutter-developer.php?error=1");
        } elseif ($position == 'backend-developer') {
            header("Location: ../career/backend-developer.php?error=1");
        } else {
            header("Location: ../career/?error=1");
        }
    }
} else {
    // Redirect if not POST request
    header("Location: ../career/");
}
exit();
?>
