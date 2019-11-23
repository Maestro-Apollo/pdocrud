
  <?php
  include 'header.php';
  include 'classes/Database.php';
  $obj = new Database;
  ?>
    <section class="tbl_section container">


        <div>

        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="lead">ID</th>
                    <th scope="col" class="lead">Name</th>
                    <th scope="col" class="lead">Email</th>
                    <th scope="col" class="lead">Phone</th>
                    <th scope="col" class="lead">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>mark@gmail.com</td>
                    <td>02839283</td>
                    <td><a href="edit.php" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>jacob@gmail.com</td>
                    <td>02837293</td>
                    <td><a href="#" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
        </table>


    </section>

    <?php include 'footer.php'; ?>
