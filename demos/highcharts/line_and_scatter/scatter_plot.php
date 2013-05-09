<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR. 'Highchart.php';

$chart = new Highchart();

$chart->chart->renderTo = "container";
$chart->chart->type = "scatter";
$chart->chart->zoomType = "xy";
$chart->title->text = "Height Versus Weight of 507 Individuals by Gender";
$chart->subtitle->text = "Source: Heinz 2003";
$chart->xAxis->title->enabled = 1;
$chart->xAxis->title->text = "Height (cm)";
$chart->xAxis->startOnTick = 1;
$chart->xAxis->endOnTick = 1;
$chart->xAxis->showLastLabel = 1;
$chart->yAxis->title->text = "Weight (kg)";
$chart->tooltip->formatter = new HighchartJsExpr("function() {
                                  return ''+
                                  this.x +' cm, '+ this.y +' kg';}");
$chart->legend->layout = "vertical";
$chart->legend->align = "left";
$chart->legend->verticalAlign = "top";
$chart->legend->x = 100;
$chart->legend->y = 70;
$chart->legend->floating = 1;
$chart->legend->backgroundColor = "#FFFFFF";
$chart->legend->borderWidth = 1;
$chart->plotOptions->scatter->marker->radius = 5;
$chart->plotOptions->scatter->marker->states->hover->enabled = 1;
$chart->plotOptions->scatter->marker->states->hover->lineColor = "rgb(100,100,100)";
$chart->plotOptions->scatter->states->hover->marker->enabled = false;
$chart->series[] = array('name' => "Female",
                         'color' => "rgba(223, 83, 83, .5)",
                         'data' => array(
        array(161.2, 51.6), array(167.5, 59.0), array(159.5, 49.2), array(157.0, 63.0), array(155.8, 53.6),
        array(170.0, 59.0), array(159.1, 47.6), array(166.0, 69.8), array(176.2, 66.8), array(160.2, 75.2),
        array(172.5, 55.2), array(170.9, 54.2), array(172.9, 62.5), array(153.4, 42.0), array(160.0, 50.0),
        array(147.2, 49.8), array(168.2, 49.2), array(175.0, 73.2), array(157.0, 47.8), array(167.6, 68.8),
        array(159.5, 50.6), array(175.0, 82.5), array(166.8, 57.2), array(176.5, 87.8), array(170.2, 72.8),
        array(174.0, 54.5), array(173.0, 59.8), array(179.9, 67.3), array(170.5, 67.8), array(160.0, 47.0),
        array(154.4, 46.2), array(162.0, 55.0), array(176.5, 83.0), array(160.0, 54.4), array(152.0, 45.8),
        array(162.1, 53.6), array(170.0, 73.2), array(160.2, 52.1), array(161.3, 67.9), array(166.4, 56.6),
        array(168.9, 62.3), array(163.8, 58.5), array(167.6, 54.5), array(160.0, 50.2), array(161.3, 60.3),
        array(167.6, 58.3), array(165.1, 56.2), array(160.0, 50.2), array(170.0, 72.9), array(157.5, 59.8),
        array(167.6, 61.0), array(160.7, 69.1), array(163.2, 55.9), array(152.4, 46.5), array(157.5, 54.3),
        array(168.3, 54.8), array(180.3, 60.7), array(165.5, 60.0), array(165.0, 62.0), array(164.5, 60.3),
        array(156.0, 52.7), array(160.0, 74.3), array(163.0, 62.0), array(165.7, 73.1), array(161.0, 80.0),
        array(162.0, 54.7), array(166.0, 53.2), array(174.0, 75.7), array(172.7, 61.1), array(167.6, 55.7),
        array(151.1, 48.7), array(164.5, 52.3), array(163.5, 50.0), array(152.0, 59.3), array(169.0, 62.5),
        array(164.0, 55.7), array(161.2, 54.8), array(155.0, 45.9), array(170.0, 70.6), array(176.2, 67.2),
        array(170.0, 69.4), array(162.5, 58.2), array(170.3, 64.8), array(164.1, 71.6), array(169.5, 52.8),
        array(163.2, 59.8), array(154.5, 49.0), array(159.8, 50.0), array(173.2, 69.2), array(170.0, 55.9),
        array(161.4, 63.4), array(169.0, 58.2), array(166.2, 58.6), array(159.4, 45.7), array(162.5, 52.2),
        array(159.0, 48.6), array(162.8, 57.8), array(159.0, 55.6), array(179.8, 66.8), array(162.9, 59.4),
        array(161.0, 53.6), array(151.1, 73.2), array(168.2, 53.4), array(168.9, 69.0), array(173.2, 58.4),
        array(171.8, 56.2), array(178.0, 70.6), array(164.3, 59.8), array(163.0, 72.0), array(168.5, 65.2),
        array(166.8, 56.6), array(172.7, 105.2), array(163.5, 51.8), array(169.4, 63.4), array(167.8, 59.0),
        array(159.5, 47.6), array(167.6, 63.0), array(161.2, 55.2), array(160.0, 45.0), array(163.2, 54.0),
        array(162.2, 50.2), array(161.3, 60.2), array(149.5, 44.8), array(157.5, 58.8), array(163.2, 56.4),
        array(172.7, 62.0), array(155.0, 49.2), array(156.5, 67.2), array(164.0, 53.8), array(160.9, 54.4),
        array(162.8, 58.0), array(167.0, 59.8), array(160.0, 54.8), array(160.0, 43.2), array(168.9, 60.5),
        array(158.2, 46.4), array(156.0, 64.4), array(160.0, 48.8), array(167.1, 62.2), array(158.0, 55.5),
        array(167.6, 57.8), array(156.0, 54.6), array(162.1, 59.2), array(173.4, 52.7), array(159.8, 53.2),
        array(170.5, 64.5), array(159.2, 51.8), array(157.5, 56.0), array(161.3, 63.6), array(162.6, 63.2),
        array(160.0, 59.5), array(168.9, 56.8), array(165.1, 64.1), array(162.6, 50.0), array(165.1, 72.3),
        array(166.4, 55.0), array(160.0, 55.9), array(152.4, 60.4), array(170.2, 69.1), array(162.6, 84.5),
        array(170.2, 55.9), array(158.8, 55.5), array(172.7, 69.5), array(167.6, 76.4), array(162.6, 61.4),
        array(167.6, 65.9), array(156.2, 58.6), array(175.2, 66.8), array(172.1, 56.6), array(162.6, 58.6),
        array(160.0, 55.9), array(165.1, 59.1), array(182.9, 81.8), array(166.4, 70.7), array(165.1, 56.8),
        array(177.8, 60.0), array(165.1, 58.2), array(175.3, 72.7), array(154.9, 54.1), array(158.8, 49.1),
        array(172.7, 75.9), array(168.9, 55.0), array(161.3, 57.3), array(167.6, 55.0), array(165.1, 65.5),
        array(175.3, 65.5), array(157.5, 48.6), array(163.8, 58.6), array(167.6, 63.6), array(165.1, 55.2),
        array(165.1, 62.7), array(168.9, 56.6), array(162.6, 53.9), array(164.5, 63.2), array(176.5, 73.6),
        array(168.9, 62.0), array(175.3, 63.6), array(159.4, 53.2), array(160.0, 53.4), array(170.2, 55.0),
        array(162.6, 70.5), array(167.6, 54.5), array(162.6, 54.5), array(160.7, 55.9), array(160.0, 59.0),
        array(157.5, 63.6), array(162.6, 54.5), array(152.4, 47.3), array(170.2, 67.7), array(165.1, 80.9),
        array(172.7, 70.5), array(165.1, 60.9), array(170.2, 63.6), array(170.2, 54.5), array(170.2, 59.1),
        array(161.3, 70.5), array(167.6, 52.7), array(167.6, 62.7), array(165.1, 86.3), array(162.6, 66.4),
        array(152.4, 67.3), array(168.9, 63.0), array(170.2, 73.6), array(175.2, 62.3), array(175.2, 57.7),
        array(160.0, 55.4), array(165.1, 104.1), array(174.0, 55.5), array(170.2, 77.3), array(160.0, 80.5),
        array(167.6, 64.5), array(167.6, 72.3), array(167.6, 61.4), array(154.9, 58.2), array(162.6, 81.8),
        array(175.3, 63.6), array(171.4, 53.4), array(157.5, 54.5), array(165.1, 53.6), array(160.0, 60.0),
        array(174.0, 73.6), array(162.6, 61.4), array(174.0, 55.5), array(162.6, 63.6), array(161.3, 60.9),
        array(156.2, 60.0), array(149.9, 46.8), array(169.5, 57.3), array(160.0, 64.1), array(175.3, 63.6),
        array(169.5, 67.3), array(160.0, 75.5), array(172.7, 68.2), array(162.6, 61.4), array(157.5, 76.8),
        array(176.5, 71.8), array(164.4, 55.5), array(160.7, 48.6), array(174.0, 66.4), array(163.8, 67.3)));


$chart->series[] = array('name' => "Male",
                         'color' => "rgba(119, 152, 191, .5)",
                         'data' => array(
                array(174.0, 65.6), array(175.3, 71.8), array(193.5, 80.7), array(186.5, 72.6), array(187.2, 78.8),
                array(181.5, 74.8), array(184.0, 86.4), array(184.5, 78.4), array(175.0, 62.0), array(184.0, 81.6),
                array(180.0, 76.6), array(177.8, 83.6), array(192.0, 90.0), array(176.0, 74.6), array(174.0, 71.0),
                array(184.0, 79.6), array(192.7, 93.8), array(171.5, 70.0), array(173.0, 72.4), array(176.0, 85.9),
                array(176.0, 78.8), array(180.5, 77.8), array(172.7, 66.2), array(176.0, 86.4), array(173.5, 81.8),
                array(178.0, 89.6), array(180.3, 82.8), array(180.3, 76.4), array(164.5, 63.2), array(173.0, 60.9),
                array(183.5, 74.8), array(175.5, 70.0), array(188.0, 72.4), array(189.2, 84.1), array(172.8, 69.1),
                array(170.0, 59.5), array(182.0, 67.2), array(170.0, 61.3), array(177.8, 68.6), array(184.2, 80.1),
                array(186.7, 87.8), array(171.4, 84.7), array(172.7, 73.4), array(175.3, 72.1), array(180.3, 82.6),
                array(182.9, 88.7), array(188.0, 84.1), array(177.2, 94.1), array(172.1, 74.9), array(167.0, 59.1),
                array(169.5, 75.6), array(174.0, 86.2), array(172.7, 75.3), array(182.2, 87.1), array(164.1, 55.2),
                array(163.0, 57.0), array(171.5, 61.4), array(184.2, 76.8), array(174.0, 86.8), array(174.0, 72.2),
                array(177.0, 71.6), array(186.0, 84.8), array(167.0, 68.2), array(171.8, 66.1), array(182.0, 72.0),
                array(167.0, 64.6), array(177.8, 74.8), array(164.5, 70.0), array(192.0, 101.6), array(175.5, 63.2),
                array(171.2, 79.1), array(181.6, 78.9), array(167.4, 67.7), array(181.1, 66.0), array(177.0, 68.2),
                array(174.5, 63.9), array(177.5, 72.0), array(170.5, 56.8), array(182.4, 74.5), array(197.1, 90.9),
                array(180.1, 93.0), array(175.5, 80.9), array(180.6, 72.7), array(184.4, 68.0), array(175.5, 70.9),
                array(180.6, 72.5), array(177.0, 72.5), array(177.1, 83.4), array(181.6, 75.5), array(176.5, 73.0),
                array(175.0, 70.2), array(174.0, 73.4), array(165.1, 70.5), array(177.0, 68.9), array(192.0, 102.3),
                array(176.5, 68.4), array(169.4, 65.9), array(182.1, 75.7), array(179.8, 84.5), array(175.3, 87.7),
                array(184.9, 86.4), array(177.3, 73.2), array(167.4, 53.9), array(178.1, 72.0), array(168.9, 55.5),
                array(157.2, 58.4), array(180.3, 83.2), array(170.2, 72.7), array(177.8, 64.1), array(172.7, 72.3),
                array(165.1, 65.0), array(186.7, 86.4), array(165.1, 65.0), array(174.0, 88.6), array(175.3, 84.1),
                array(185.4, 66.8), array(177.8, 75.5), array(180.3, 93.2), array(180.3, 82.7), array(177.8, 58.0),
                array(177.8, 79.5), array(177.8, 78.6), array(177.8, 71.8), array(177.8, 116.4), array(163.8, 72.2),
                array(188.0, 83.6), array(198.1, 85.5), array(175.3, 90.9), array(166.4, 85.9), array(190.5, 89.1),
                array(166.4, 75.0), array(177.8, 77.7), array(179.7, 86.4), array(172.7, 90.9), array(190.5, 73.6),
                array(185.4, 76.4), array(168.9, 69.1), array(167.6, 84.5), array(175.3, 64.5), array(170.2, 69.1),
                array(190.5, 108.6), array(177.8, 86.4), array(190.5, 80.9), array(177.8, 87.7), array(184.2, 94.5),
                array(176.5, 80.2), array(177.8, 72.0), array(180.3, 71.4), array(171.4, 72.7), array(172.7, 84.1),
                array(172.7, 76.8), array(177.8, 63.6), array(177.8, 80.9), array(182.9, 80.9), array(170.2, 85.5),
                array(167.6, 68.6), array(175.3, 67.7), array(165.1, 66.4), array(185.4, 102.3), array(181.6, 70.5),
                array(172.7, 95.9), array(190.5, 84.1), array(179.1, 87.3), array(175.3, 71.8), array(170.2, 65.9),
                array(193.0, 95.9), array(171.4, 91.4), array(177.8, 81.8), array(177.8, 96.8), array(167.6, 69.1),
                array(167.6, 82.7), array(180.3, 75.5), array(182.9, 79.5), array(176.5, 73.6), array(186.7, 91.8),
                array(188.0, 84.1), array(188.0, 85.9), array(177.8, 81.8), array(174.0, 82.5), array(177.8, 80.5),
                array(171.4, 70.0), array(185.4, 81.8), array(185.4, 84.1), array(188.0, 90.5), array(188.0, 91.4),
                array(182.9, 89.1), array(176.5, 85.0), array(175.3, 69.1), array(175.3, 73.6), array(188.0, 80.5),
                array(188.0, 82.7), array(175.3, 86.4), array(170.5, 67.7), array(179.1, 92.7), array(177.8, 93.6),
                array(175.3, 70.9), array(182.9, 75.0), array(170.8, 93.2), array(188.0, 93.2), array(180.3, 77.7),
                array(177.8, 61.4), array(185.4, 94.1), array(168.9, 75.0), array(185.4, 83.6), array(180.3, 85.5),
                array(174.0, 73.9), array(167.6, 66.8), array(182.9, 87.3), array(160.0, 72.3), array(180.3, 88.6),
                array(167.6, 75.5), array(186.7, 101.4), array(175.3, 91.1), array(175.3, 67.3), array(175.9, 77.7),
                array(175.3, 81.8), array(179.1, 75.5), array(181.6, 84.5), array(177.8, 76.6), array(182.9, 85.0),
                array(177.8, 102.5), array(184.2, 77.3), array(179.1, 71.8), array(176.5, 87.9), array(188.0, 94.3),
                array(174.0, 70.9), array(167.6, 64.5), array(170.2, 77.3), array(167.6, 72.3), array(188.0, 87.3),
                array(174.0, 80.0), array(176.5, 82.3), array(180.3, 73.6), array(167.6, 74.1), array(188.0, 85.9),
                array(180.3, 73.2), array(167.6, 76.3), array(183.0, 65.9), array(183.0, 90.9), array(179.1, 89.1),
                array(170.2, 62.3), array(177.8, 82.7), array(179.1, 79.1), array(190.5, 98.2), array(177.8, 84.1),
                array(180.3, 83.2), array(180.3, 83.2)));
?>

<html>
  <head>
    <title>Scatter plot</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <?php
      foreach ($chart->getScripts() as $script) {
         echo '<script type="text/javascript" src="' . $script . '"></script>';
      }
    ?>
  </head>
  <body>
    <div id="container"></div>
    <script type="text/javascript">
    <?php
      echo $chart->render("chart1");
    ?>
    </script>
  </body>
</html>