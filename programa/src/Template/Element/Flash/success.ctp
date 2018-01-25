<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="message success text-center fs26 py-4" onclick="this.classList.add('hidden')"><?= $message ?></div>
