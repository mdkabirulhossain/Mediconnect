<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="footer.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100%; /* Ensure the body takes up the full viewport height */
        }
        
        .content {
            padding-bottom: 60px; /* Set padding to allow space for the fixed footer */
            min-height: 100%; /* Ensure the content area takes up at least the full viewport height */
            box-sizing: border-box; /* Include padding in the total height of .content */
        }
        
        .footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 5px;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="content">
        <!-- Your page content goes here -->
    </div>
    <footer class="footer">
        <p>&copy; <?php echo date("Y"); ?> MediConnect Plus. All rights reserved.</p>
    </footer>
</body>
</html>
