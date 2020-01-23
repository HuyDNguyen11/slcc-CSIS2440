<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            print("<table><tr><th>Player</th><th>Computer</th><th>Result</th></tr>");
            $score = 0;
            for($i = 0; $i < 10 ; $i++){
                $playerScore = rand(1, 100);
                $compScore = rand(1, 100);
                print("<tr><th>$playerScore</th><th>$compScore</th>");
                if($playerScore > $compScore){
                    print("<th>player wins</th>");
                    $score++;
                }elseif($playerScore < $compScore){
                    print("<th>computer wins</th>");
                    $score--;
                }else{
                    print("<th>draw</th>");
                }
                print("</tr>");
            }
            print("<tr><td colspan = 1>Score = </td><td>$score</td></tr></table>");

            $year = rand(1900, 2020);
            print("The year $year is the year of ");
            switch($year%12){
                case 0:
                    echo 'Monkey.';
                    break;
                case 1:
                    echo 'Rooster.';
                    break;
                case 2:
                    echo 'Dog.';
                    break;
                case 3:
                    echo 'Boar';
                    break;
                case 4:
                    echo 'Rat.';
                    break;
                case 5:
                    echo "Ox.";
                    break;
                case 6:
                    echo "Tiger.";
                    break;
                case 7:
                    echo "Cat.";
                    break;
                case 8:
                    echo "Dragon.";
                    break;
                case 9:
                    echo "Snake.";
                    break;
                case 10:
                    echo "Horse.";
                    break;
                case 11:
                    echo "Sheep.";
                    break;
                case 12:
                    echo "Monkey.";
                    break;
                default:
                    echo "blahblahblah.";
                    break;
            }
        ?>
    </body>
</html>
