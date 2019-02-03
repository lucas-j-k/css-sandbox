<?php define('DOC_ROOT_PATH', $_SERVER['DOCUMENT_ROOT']); ?>

<h2><?php echo "SERVERNAME:      " . $_SERVER['SERVER_NAME']; ?></h2>

<h2> <?php echo "URI       " . $_SERVER['REQUEST_URI']; ?></h2>

<h2><?php echo 'http host:    ' . $_SERVER['HTTP_HOST'] ?></h2>

<h2><?php echo 'doc root :    ' . $_SERVER['DOCUMENT_ROOT'] ?></h2>

<h2><?php echo 'addr :    ' . $_SERVER['SERVER_ADDR'] ?></h2>

<?php $partialPath = $_SERVER['SERVER_NAME'] . '/sandbox/partials/' ?>

<h3><?php echo $partialPath  ?></h3>