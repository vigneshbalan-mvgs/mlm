<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horizontal Members Tree</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: snow;
            font-family: 'Arial', sans-serif;
            width:100%;
            height:100%;
            
        }
        .back {
          background-color: blue;
          border: none;
          color: white;
          padding: 10px 20px;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
          border-radius: 5px;
          transition: all 0.3s ease;
          left:0;
          position:sticky;
        }
        

        
        .back:hover {
          background-color: light-blue;
          transform: scale(1.05);
        }
     

.hover:hover{
              transform: scale(1.05);

}
        .tree {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: nowrap;
        }

        .tree ul {
            display: flex;
            justify-content: center;
            position: relative;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .tree ul::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            border-top: 1px solid #ccc;
            z-index: -1;
        }

        .tree li {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 20px;
            position: relative;
        }

        .tree li:not(:last-child)::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -20px;
            width: 20px;
            border-top: 1px solid #ccc;
        }

        .tree li:not(:first-child)::before {
            content: '';
            position: absolute;
            top: 50%;
            left: -20px;
            width: 20px;
            border-top: 1px solid #ccc;
        }

        .tree .user-icon {
            width: 50px;
            height: 50px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
            border: 2px solid #ccc;
        }

        .tree ul ul {
            margin-top: 200px;
        }

        .tree ul ul::before {
            width: 50%;
            left: 25%;
        }

        /* Different color themes for each user icon */
        .tree li:nth-child(1) .user-icon {
            background-color: #007bff; /* Blue */
            color: #fff;
        }

        .tree li:nth-child(2) .user-icon {
            background-color: #28a745; /* Green */
            color: #fff;
        }

        .tree li:nth-child(3) .user-icon {
            background-color: #17a2b8; /* Teal */
            color: #fff;
        }

        .tree li:nth-child(4) .user-icon {
            background-color: #ffc107; /* Yellow */
            color: #212529;
        }

        .tree li:nth-child(5) .user-icon {
            background-color: #dc3545; /* Red */
            color: #fff;
        }

    </style>
</head>
<body>

<div class="container ">
    <button class="back" role="button" onclick="home.php">Back</button>
    <h1 class="my-4 text-center" style="color:black;">Members Tree</h1>

    <div class="tree">
        <ul>
            <li>
             
                    
                <div class="user-icon">JD</div>
                <span >John Doe</span>
       
                <ul>
                    <li>
                        <div class="user-icon ">JD</div>
                        <span>Jane Doe</span>
                        <ul>
                            <li>
                                <div class="user-icon">MS</div>
                                <span>Mary Smith</span>
                            </li>
                            <li>
                                <div class="user-icon">DS</div>
                                <span>David Smith</span>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="user-icon">JD</div>
                        <span>James Doe</span>
                        <ul>
                            <li>
                                <div class="user-icon">LD</div>
                                <span>Linda Doe</span>
                            </li>
                            <li>
                                <div class="user-icon">KD</div>
                                <span>Kevin Doe</span>
                            </li>
                            <li>
                                <div class="user-icon">LD</div>
                                <span>Linda Doe</span>
                            </li>
                            <li>
                                <div class="user-icon">LD</div>
                                <span>Linda Doe</span>
                            </li>
                            <li>
                                <div class="user-icon">LD</div>
                                <span>Linda Doe</span>
                            </li>
                            <li>
                                <div class="user-icon">LD</div>
                                <span>Linda Doe</span>
                            </li>
                            <li>
                                <div class="user-icon">LD</div>
                                <span>Linda Doe</span>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

