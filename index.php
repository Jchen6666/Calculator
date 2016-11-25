

<?php



require_once 'vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('view');
$twig = new Twig_Environment($loader, array(
    'auto_reload' => true
));
$template = $twig->loadTemplate('Calculation.html.twig');
echo $template->render(array('title' => 'Result' , 'answer'=>Cal()));

function Cal()
{
    $first = $_POST['first'];
    $second = $_POST['second'];
    $result = 0;
    if ($_POST['group1'] == 'add') {
        echo $result = $first + $second;
    } else if ($_POST['group1'] == 'subtract') {
        echo $result = $first - $second;
    } else if ($_POST['group1'] == 'times') {
        echo $result = $first * $second;
    } else if ($_POST['group1'] == 'divide') {
        echo $result = $first / $second;
    }
}
