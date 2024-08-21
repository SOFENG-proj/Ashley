<?php
    $accnts = [
        [
            'Username' => 'Ash', 'Password' => '12345', 'Course' => 'BSCS'
        ],
        [
            'Username' => 'Geri', 'Password' => '12345', 'Course' => 'BSA'
        ],
        [
            'Username' => 'Yheca', 'Password' => '54321', 'Course' => 'BSTM'
        ]
        ];

        function tologin($passw, $email, $accs) {
            $stts = false;
            for ($n = 0; $n < count($accs); $n++) {
                if ($accs[$n]['Username'] == $email && $accs[$n]['Password'] == $passw) {
                    // echo $accs[$n]['Course'];
                    $stts = true;
                }
            };
            if ($stts == false) {
                return "TRY AGAIN";
            } else {
                // return 'NICE';
                header("Location: div_prac.html");
                exit();
            }
        
        // Hash the password for security purposes (optional)
        // $hashed_password = password_hash($passw, PASSWORD_DEFAULT);
        
        // For debugging (don't use in production)
        // echo "Hashed password: " . $hashed_password;
        // if ()
        //     return $passw; // In a real application, you'd process the password securely
        };

    // Ensure 'pssw' is set in the GET request
    if (isset($_GET['pssw'])) {
        if (isset($_GET['u_e_n'])){
            $passw = $_GET['pssw'];
            $email = $_GET['u_e_n'];

            // Sanitize the input to avoid XSS and other issues
            // $passw = htmlspecialchars($passw, ENT_QUOTES, 'UTF-8');

            // Call the function and display the result (for debugging)
            echo tologin($passw, $email, $accnts);
        } else {
            echo "No password provided.";
        }
    }
?>