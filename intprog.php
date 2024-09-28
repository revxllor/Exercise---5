<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #3AAFA9;
            color: #333;
            margin: 0;
            padding: 0;
            background-image: url('bgtech1.jpg');
            background-size: cover;
        }
        header {
            background: #1F2833;
            color: #fff;
            padding: 5px 0;
            text-align: center;
            border-bottom: 5px solid #00251a;
        }
        header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .team {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: auto auto;
            grid-gap: 50px;
            padding: 30px 50px;
            border-radius: 5%;
        }
        .container {
            width: 100%;
            margin: 20px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .team-member {
            background: #DEF2F1;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            padding: 25px;
            width: 350px;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }
        .team-member img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .team-member h3 {
            margin: 5px 0;
            font-size: 1.5em;
            color: #004d40;
        }
        .team-member p {
            font-size: 1em;
            color: #555;
            margin: 0;
        }
        .team-member .description {
            font-size: 0.9em;
            color: #777;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .team-member .myButton {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1em;
            border: 2px solid #004d40;
            border-radius: 5px;
            background-color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .team-member .myButton:hover {
            background-color: #004d40;
            color: #fff;
        }
        .bottom-row {
            grid-column: 1 / span 3;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .bottom-row .team-member {
            flex: 1;
            max-width: 40%;
            box-sizing: border-box;
        }
        .copyright p {
            text-align: center;
            padding: 18px;
            font-size: 15px;
            font-weight: 500;
            color: #fff;
            letter-spacing: 1px;
          }
            .message {
                font-size: 2.5em;
                color: #fff;
                text-align: center;
                margin-top: 20px;
            }
            .search-results {
                text-align: center;
                margin-top: 20px;
            }
            .search-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search-box {
        background-color: #2B7A78;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
        width: 50%;
    }

    .search-box h2 {
        color: #fff;
        margin-bottom: 20px;
    }

    .search-box form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .search-box input[type="text"] {
        padding: 10px;
        width: 70%;
        border-radius: 5px;
        border: none;
        margin-right: 10px;
    }

    .search-box button {
        padding: 10px 20px;
        background-color: #17252A;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .search-box button:hover {
        background-color: #004d40;
    }
        }
    </style>
</head>
<body>

    <header>
        <h1>Meet Our Team</h1>
    </header>

    <section>

      <div class="message">
          <?php
          if (isset($_SESSION['name']) && isset($_SESSION['age'])) {
              $name = htmlspecialchars($_SESSION['name']);
              $age = intval($_SESSION['age']);
              echo "Hello $name!, you are $age years old. Welcome to our team profile!";
          } else {
              echo "Welcome to our team profile! Please log in.";
          }
          ?>
      </div>
       </div>
        <div class="container">
            <div class="team">
                <?php
                $teamMembers = [
                    [
                        "id" => "nameHeading1",
                        "img" => "blandin.jpg",
                        "name" => "Blandin Nap N. Armea",
                        "position" => "Team Leader",
                        "description" => "Blandin is a passionate student who has a strong curiosity and passion for technology, with characteristics of strong problem-solving skills and critical thinking.",
                        "contact" => "armeablandinnap_bsit@plmun.edu.ph"
                    ],
                    [
                        "id" => "nameHeading2",
                        "img" => "anna.jpg",
                        "name" => "Joanna Laine De Guzman",
                        "position" => "Team Assistant Leader",
                        "description" => "Joanna is a woman who is focused when it comes to group activities. She enjoys collaborating on projects and learning new things.",
                        "contact" => "deguzmanjoannalaine_bsit@plmun.edu.ph"
                    ],
                    [
                        "id" => "nameHeading3",
                        "img" => "rolli.jpg",
                        "name" => "Rolliver Hernandez",
                        "position" => "Team Member",
                        "description" => "Rolliver is a dedicated student with a passion for technology and gaming, always eager to learn new things and challenge himself.",
                        "contact" => "hernandezrolliver_bsit@plmun.edu.ph"
                    ],
                    [
                        "id" => "nameHeading4",
                        "img" => "decery.jpg",
                        "name" => "Decery Joyce Ramos",
                        "position" => "Team Member",
                        "description" => "Decery is an independent woman, balancing a career while raising her kids and showing them the value of strength and resilience.",
                        "contact" => "ramosdeceryjoyce_bsit@plmun.edu.ph"
                    ],
                    [
                        "id" => "nameHeading5",
                        "img" => "vencint.jpg",
                        "name" => "Vencint Remoto",
                        "position" => "Team Member",
                        "description" => "Vencint is a hardworking person focused on programming and above all, he loves programming websites.",
                        "contact" => "remotojohnvencint_bsit@plmun.edu.ph"
                    ]
                ];

                foreach ($teamMembers as $member) {
                    echo '
                    <div class="team-member" id="'.$member["id"].'-container">
                        <div class="image-container">
                            <img src="'.$member["img"].'" alt="'.$member["name"].'">
                        </div>
                        <h3 id="'.$member["id"].'">'.$member["name"].'</h3>
                        <div class="info-container" id="infoContainer'.$member["id"].'" style="display: none;"></div>
                        <button class="myButton" id="myButton'.$member["id"].'" onclick="toggleInformation(\''.$member["id"].'\')">Information</button>
                    </div>';
                }
                ?>
              </div>
            </div>
        </div>
        <section class="search-container">
    <div class="search-box">
        <h2>Search for Team Member</h2>
        <form method="GET" action="">
            <label for="teamMember" style="color: #fff;">Enter Team Member Name:</label>
            <input type="text" id="teamMember" name="teamMember" required>
            <button type="submit">Search</button>
        </form>

        <?php
        if (isset($_GET['teamMember'])) {
            $searchName = $_GET['teamMember'];
            $found = false;

            foreach ($teamMembers as $member) {
                if ($member['name'] === $searchName) {
                    echo '<div class="team-member">';
                    echo '<img src="' . $member['img'] . '" alt="' . $member['name'] . '">';
                    echo '<h3>' . $member['name'] . '</h3>';
                    echo '<p>Position: ' . $member['position'] . '</p>';
                    echo '<p>Description: ' . $member['description'] . '</p>';
                    echo '<p>Contact: <a href="mailto:' . $member['contact'] . '">' . $member['contact'] . '</a></p>';
                    echo '</div>';
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                echo '<p>No team member found with the name: ' . htmlspecialchars($searchName) . '</p>';
            }
        }
        ?>
    </div>
</section>
    </section>

    <div class="copyright">
        <p>&copy; BSIT-3D of PAMANTASAN NG LUNGSOD NG MUNTINLUPA. All Rights Reserved.</p>
    </div>

    <script>
function toggleInformation(memberId) {
    const memberContainer = document.getElementById(memberId + '-container');
    const button = document.getElementById('myButton' + memberId);
    const infoContainer = document.getElementById('infoContainer' + memberId);
    const nameHeading = document.getElementById(memberId);
    const imageContainer = memberContainer.querySelector(".image-container");
    const memberData = <?php echo json_encode($teamMembers); ?>.find(m => m.id === memberId);

    const isVisible = infoContainer.style.display === "block";

    if (!isVisible) {
        button.innerHTML = "Hide Information";
        nameHeading.style.display = "none";

        infoContainer.innerHTML = `
            <h5 style="font-size:1.2em;">Information:</h5>
            <p>Name: ${nameHeading.textContent}</p>
            <p>Position: ${memberData.position}</p>
            <p>Description: ${memberData.description}</p>
            <p>Contact: <a href="mailto:${memberData.contact}">${memberData.contact}</a></p>
        `;

        infoContainer.style.display = "block";
        infoContainer.style.textAlign = "left";
        infoContainer.style.marginBottom = "20px";


        const allMembers = document.querySelectorAll('.team-member');
        allMembers.forEach(member => {
            if (member !== memberContainer) {
                member.querySelector('.image-container').style.marginBottom = "15px";
                member.querySelector('.info-container').style.display = "none";
                member.querySelector('h3').style.display = "block";
                member.querySelector('.myButton').innerHTML = "Information";
            }
        });

    } else {
        button.innerHTML = "Information";
        infoContainer.innerHTML = "";
        nameHeading.style.display = "block";
        infoContainer.style.display = "none";
        imageContainer.style.marginBottom = "15px";
    }
}
</script>

</body>
</html>
