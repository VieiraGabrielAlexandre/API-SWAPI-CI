<h1>API com Guzzle</h1>
    <label class="alert-light"<?php echo $status.'<br>';?></label>
    <?php foreach($body['results'] as $key => $films): $key++?>
    <ul class="table">
        <a href="<?php echo base_url('/films/'.$key)?>"?>
            <li><?= ($films['title']).'<br>'?></li>
        </a>
    </ul>
    <?php endforeach;?>