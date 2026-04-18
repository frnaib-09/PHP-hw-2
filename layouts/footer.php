    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    if(isset($_SESSION['alert'])){
    ?>    
    <script>
        Swal.fire({
            position: "top-end",
            icon: "<?= $_SESSION['alert']['type'] ?>",
            title: "<?= $_SESSION['alert']['msg'] ?>",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
    <?php
    }
    session_unset();
    ?>
    <script></script>
    <script></script>
    <script></script>

    <?= session_unset();?>
    </body>

    </html>