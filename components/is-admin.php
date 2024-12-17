<?php if ( is_user_logged_in() && current_user_can('administrator') ) : ?>
  <style>
    .admin-box {
      position: fixed;
      z-index: 9999;
      bottom: 30px;
      right: 30px;
    }

    .admin-box .toast {
      position: absolute;
      top: 50%;
      right: 50px;
      transform: translateY(-50%);
      white-space: nowrap;
      background: #fff;
      font-family: "Brevia";
      padding: 15px 15px 15px 25px;
      border-top: 1px solid #e1e1e1;
      border-bottom: 1px solid #e1e1e1;
      border-left: 1px solid #e1e1e1;
      font-size: 14px;
      transition: all 150ms ease-in-out;
      opacity: 0;
      border-top-left-radius: 50px;
      border-bottom-left-radius: 50px;
    }

    .admin-box a {
      border: 1px solid #e1e1e1;
      border-radius: 50%;
      width: 60px;
      height: 60px;
      background: #FFF;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: all 150ms ease-in-out;
    }

    .admin-box:hover a {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0;
    }
    .admin-box:hover .toast {
      opacity: 1;
      right: 59px;
    }
  </style>
  <div id="admin-box" class="admin-box">
    <a href="<?php echo get_site_url() . '/wp-admin' ?>">
      <svg width="18" height="23" viewBox="0 0 18 23" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 14.0002C1 12.1146 1 11.1718 1.58579 10.586C2.17157 10.0002 3.11438 10.0002 5 10.0002H13C14.8856 10.0002 15.8284 10.0002 16.4142 10.586C17 11.1718 17 12.1146 17 14.0002V16.0002C17 18.8287 17 20.2429 16.1213 21.1216C15.2426 22.0002 13.8284 22.0002 11 22.0002H7C4.17157 22.0002 2.75736 22.0002 1.87868 21.1216C1 20.2429 1 18.8287 1 16.0002V14.0002Z" stroke="#33363F" stroke-width="2"/>
        <path d="M13.4999 10.0001L13.5775 9.37947C13.8364 7.30788 12.9043 5.2675 11.1688 4.10709V4.10709C9.10234 2.72543 6.36726 2.89573 4.48819 4.52305L3.66986 5.23174" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </a>

    <div class="toast">Acessar painel <br/>administrativo</div>
  </div>
<?php endif; ?>