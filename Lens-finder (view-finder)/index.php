<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Finder</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
        <div class="inner">
            <div class="top">
                <div class="column-1">
                    <h2>Home</h2>
                </div>
                <div class="column-2">
                    <div class="row-1-logo">
                        <img src="/images/website-Logo.svg" alt="logo" width="50%" style="margin: auto; display: block;">
                    </div>
                    <form action="index.php">
                    <div class="row-2-filter">
                         <label for="cbrand">Brand</label>
                         <select name="cbrand" id="cbrand">
                            <option value=""></option>
                            <option value="Canon">Canon</option>
                            <option value="Nikon">Nikon</option>
                            <option value="Sony">Sony</option>
                            <option value="Sigma">Sigma</option>
                            <option value="Fujifilm">Fujifilm</option>
                         </select>

                         <label for="lens_type">Len's Type</label>
                        <select name="lens_type" id="lens_type">
                            <option value=""></option>
                            <option value="Ultra Wide Angle">Ultra Wide Angle</option>
                            <option value="Wide Angle">Wide Angle</option>
                            <option value="Normal">Normal</option>
                            <option value="Telephoto">Telephoto</option>
                            <option value="Macro">Macro</option>
                        </select>

                        <label for="subject">Subject</label>
                        <select name="subject" id="subject">
                            <option value=""></option>
                            <option value="Architecture">Architecture</option>
                            <option value="Full-body portraits">Full-body portraits</option>
                            <option value="General purpose">General purpose</option>
                            <option value="Headshots">Headshots</option>
                            <option value="Landscapes">Landscapes</option>
                            <option value="Macro Photography">Macro Photography</option>
                            <option value="Portraits">Portraits</option>
                            <option value="Sports">Sports</option>
                        </select>
                    </div>
                    <div class="row-3-search">
                        <input type="text" name="search">
                        <input type="submit" value="Filter">
                    </div>
                    </form>
                </div>
                <div class="column-3">
                    <h2>About</h2>
                </div>
            </div>
            <div class="middle">
                <div class="results">
                    <?php
                        $database = new PDO('sqlite:camera-lenses.db');
                        $cbrand = $_GET['cbrand'];
                        $clen = $_GET['clen'];
                        $focal_leng = $_GET['focal_leng'];
                        $lens_type = $_GET['lens_type'];
                        $subject = $_GET['subject'];

                        $result = $database->query("SELECT * FROM camera-lenses WHERE cbrand='{$cbrand}' OR (lens_type='{$lens_type}' OR (subject_1='{$subject}' OR subject_2='{$subject}')) ");
                        $data = $result->fetchALL(PDO::FETCH_ASSOC);

                    ?>
                </div>
            </div>
            <div class="bottom">

            </div>
        </div>
    </div>
</body>
</html>
