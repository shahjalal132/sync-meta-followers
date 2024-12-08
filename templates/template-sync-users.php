<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Cards</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            background-color: #f8f9fa;
            padding: 20px;
            margin: 0;
        }

        .user-card {
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 10px;
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .user-card:hover {
            transform: scale(1.05);
        }

        .user-card .avatar {
            background-color: rgba(255, 200, 200, 0.4);
            /* Placeholder for color */
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .user-card .avatar img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .user-card h3 {
            font-size: 16px;
            font-weight: 600;
            margin: 10px 0;
        }

        .user-card .stats {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            font-size: 14px;
            color: #555;
        }

        .user-card .stats span {
            font-weight: bold;
        }

        .user-card .button {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #fff;
            background-color: #6c757d;
            border-radius: 5px;
            margin: 10px auto 20px;
            width: 80%;
            font-size: 14px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .user-card .button:hover {
            background-color: #343a40;
        }

        .bg-red {
            background-color: #ffe6e6;
        }

        .bg-blue {
            background-color: #e6f7ff;
        }

        .bg-green {
            background-color: #f4ffe6;
        }

        .bg-purple {
            background-color: #f7e6ff;
        }
    </style>
</head>

<body>
    <!-- Card 1 -->
    <div class="user-card">
        <div class="avatar bg-red">
            <img src="https://via.placeholder.com/60" alt="User Avatar">
        </div>
        <h3>wincooler</h3>
        <div class="stats">
            <div>
                <span>0</span> Followers
            </div>
            <div>
                <span>0</span> Following
            </div>
        </div>
        <a href="#" class="button">View Profile</a>
    </div>

    <!-- Card 2 -->
    <div class="user-card">
        <div class="avatar bg-blue">
            <img src="https://via.placeholder.com/60" alt="User Avatar">
        </div>
        <h3>upwork</h3>
        <div class="stats">
            <div>
                <span>0</span> Followers
            </div>
            <div>
                <span>0</span> Following
            </div>
        </div>
        <a href="#" class="button">View Profile</a>
    </div>

    <!-- Card 3 -->
    <div class="user-card">
        <div class="avatar bg-green">
            <img src="https://via.placeholder.com/60" alt="User Avatar">
        </div>
        <h3>udemy</h3>
        <div class="stats">
            <div>
                <span>0</span> Followers
            </div>
            <div>
                <span>0</span> Following
            </div>
        </div>
        <a href="#" class="button">View Profile</a>
    </div>

    <!-- Card 4 -->
    <div class="user-card">
        <div class="avatar bg-purple">
            <img src="https://via.placeholder.com/60" alt="User Avatar">
        </div>
        <h3>tom-wilson</h3>
        <div class="stats">
            <div>
                <span>0</span> Followers
            </div>
            <div>
                <span>0</span> Following
            </div>
        </div>
        <a href="#" class="button">View Profile</a>
    </div>
</body>

</html>