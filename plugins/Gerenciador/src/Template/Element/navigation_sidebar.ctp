<ul class="nav">
    <li>
        <a href="<?= $this->Url->build(["controller" => "Pages","action" => "home"]);?>">
            <i class="pe-7s-graph"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li>
        <a href="<?= $this->Url->build(["controller" => "Users","action" => "index"]);?>">
            <i class="pe-7s-user"></i>
            <p>Usuários</p>
        </a>
    </li>
    <li>
        <a href="<?= $this->Url->build(["controller" => "Banners","action" => "index"]);?>">
            <i class="pe-7s-photo"></i>
            <p>Banners</p>
        </a>
    </li>
<?php /*
    <li>
        <a href="<?= $this->Url->build(["controller" => "Produtos","action" => "index"]);?>">
            <i class="pe-7s-server"></i>
            <p>Produtos</p>
        </a>
    </li>

    <li>
        <a href="<?= $this->Url->build(["controller" => "Prospeccao","action" => "index"]);?>">
            <i class="pe-7s-calculator"></i>
            <p>Prospecções</p>
        </a>
    </li>
    */?>
</ul>
