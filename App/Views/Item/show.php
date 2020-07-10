<div class="col-md-8">
    <h3 class="mb-3 mt-3">Item details</h3>
    <p><b>Categoty:</b>
        <?php
        if (isset($params['category'])) {
            echo $params['category'];
        };
        ?>
    </p>
    <p><b>Title:</b>
        <?php
        if (isset($params['title'])) {
            echo $params['title'];
        };
        ?>
    </p>
    <p><b>Description:</b>
        <?php
        if (isset($params['description'])) {
            echo $params['description'];
        };
        ?>
    </p>
    <p><b>Time:</b>
        <?php
        if (isset($params['timestamp'])) {
            echo $params['timestamp'];
        };
        ?>
    </p>
</div>
