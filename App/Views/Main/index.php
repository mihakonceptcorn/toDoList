<h3 class="mb-3 mt-3">ToDO List</h3>
<table class="table table-striped table-sm mb-4">
    <thead>
        <tr>
            <th>Category</th>
            <th>Title</th>
            <th>Timestamp</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
        if (!empty($params['list']) && count($params['list']) > 0) {

            foreach ($params['list'] as $item) {
                $row = "<tr>";
                $row .= '<td>' . $item['category'] . '</td>';
                $row .= '<td><a href="item/' . $item['id'] .'">' . $item['title'] . '</a></td>';
                $row .= '<td>' . $item['timestamp'] . '</td>';
                $row .= '<td>
                            <form action="done/' . $item['id'] .'" method="post">
                            <button type="checkbox" name="done" class="btn btn-outline-success">Done</button>
                            </form>
                         </td>';
                $row .= "</tr>";
                echo $row;
            }

        }
    ?>
    </tbody>
</table>