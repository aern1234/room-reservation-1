<?php
@session_start();
$member_id = $_SESSION['member_id'] ?? '';
$username = $_SESSION['username_member'] ?? '';
?>
<nav class="navbar navbar-expand-lg bg-black navbar-dark shadow-lg p-0">
    <div class="container">
        <a class="navbar-brand" href="./">
            <?php if ($logo_type == 'logoImage') { ?>
                <img src="<?php echo $logo_dir ?>?" style="width: 70px;height:70px;object-fit:contain;">
            <?php  } else {
                echo $logo;
            } ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <?php if (!empty($member_id)) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="./reservation_history.php">
                        <i class="fa-solid fa-rotate"></i>
                        ประวัติการจอง
                    </a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="./rooms.php">ห้องพัก</a>
                </li>
                <li class="nav-item dropdown position-relative">
                    <a class="nav-link d-flex align-items-center text-white user-profile-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user me-1"></i>
                        <?php echo $_SESSION['member_fname'] . " " . $_SESSION['member_lname']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        
                        <li><a id="logout" class="nav-link btn text-black">ออกจากระบบ</a></li>
                    </ul>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="./signin.php">เข้าสู่ระบบ</a>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Custom styling for the dropdown */
.dropdown-menu {
    min-width: 200px;
    margin-top: 0.5rem;
    border-radius: 0.25rem;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
}

.dropdown-item {
    padding: 0.5rem 1rem;
}

.dropdown-item:hover {
    background-color: #f8f9fa;
}

/* Optional: Add a subtle indicator that this is clickable */
.user-profile-link {
    cursor: pointer;
}

.user-profile-link:hover {
    opacity: 0.9;
}
</style>

<script src="./js/logout.js"></script>