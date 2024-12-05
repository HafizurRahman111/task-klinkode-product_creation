<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: 'Inter', sans-serif;
            background-color: #f9fafb;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .welcome-container {
            text-align: center;
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 400px;
        }

        /* header */
        .welcome-header h1 {
            font-size: 2rem;
            font-weight: 600;
            color: #0a1f44;
            margin-bottom: 0.5rem;
        }

        .welcome-header p {
            font-size: 1rem;
            color: #555;
        }

        /* button  */
        .button-container {
            margin-top: 1.5rem;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 5px;
            transition: background-color 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0 2px 10px rgba(0, 91, 187, 0.2);
        }
    </style>
</head>

<body>
    <div class="welcome-container">
        <header class="welcome-header">
            <h1>Welcome to the Product Manager</h1>
            <p>Manage your products seamlessly and effortlessly.</p>
        </header>
        <div class="button-container">
            <a href="/product/create" class="btn btn-primary">Create Product</a>
        </div>
    </div>
</body>

</html>