<style>
    .card1 {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 320px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    padding: 32px;
    overflow: hidden;
    border-radius: 10px;
    transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  }

  .content {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 20px;
    color: #e8e8e8;
    transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  }

  .content .heading {
    font-weight: 700;
    font-size: 32px;
  }

  .content .para {
    line-height: 1.5;
  }

  .content .btn {
    color: #e8e8e8;
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    border: none;
    cursor: pointer;
    background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100%);
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  }

  .card1::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 5px;
    background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100%);
    z-index: -1;
    transition: all 0.5s cubic-bezier(0.23, 1, 0.320, 1);
  }

  .card1:hover::before {
    height: 100%;
  }

  .card1:hover {
    box-shadow: none;
  }

  .card1:hover .btn {
    color: #212121;
    background: #e8e8e8;
  }

  .content .btn:hover {
    outline: 2px solid #e8e8e8;
    background: transparent;
    color: #e8e8e8;
  }

  .content .btn:active {
    box-shadow: none;
  }

  .plan {
    border-radius: 16px;
    box-shadow: 0 30px 30px -25px rgba(0, 38, 255, 0.205);
    padding: 10px;
    background-color: #fff;
    color: #697e91;
    max-width: 300px;
  }

  .plan strong {
    font-weight: 600;
    color: #425275;
  }

  .plan .inner {
    align-items: center;
    padding: 20px;
    padding-top: 40px;
    background-color: #ecf0ff;
    border-radius: 12px;
    position: relative;
  }

  .plan .pricing {
    position: absolute;
    top: 0;
    right: 0;
    background-color: #bed6fb;
    border-radius: 99em 0 0 99em;
    display: flex;
    align-items: center;
    padding: 0.1em 0.75em;
    font-size: 1.3rem;
    font-weight: 00;
    color: #425475;
  }

  .plan .pricing small {
    color: #707a91;
    font-size: 0.75em;
    margin-left: 0.25em;
  }

  .plan .title {
    font-weight: 600;
    font-size: 1.25rem;
    color: #425675;
  }

  .plan .title+* {
    margin-top: 0.75rem;
  }

  .plan .info+* {
    margin-top: 1rem;
  }

  .plan .features {
    display: flex;
    flex-direction: column;
  }

  .plan .features li {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .plan .features li+* {
    margin-top: 0.75rem;
  }

  .plan .features .icon {
    background-color: #1FCAC5;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    border-radius: 50%;
    width: 20px;
    height: 20px;
  }

  .plan .features .icon svg {
    width: 14px;
    height: 14px;
  }

  .plan .features+* {
    margin-top: 1.25rem;
  }

  .plan .action {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: end;
  }

  .plan .button {
    background-color: #6558d3;
    border-radius: 6px;
    color: #fff;
    font-weight: 500;
    font-size: 1.125rem;
    text-align: center;
    border: 0;
    outline: 0;
    width: 100%;
    padding: 0.625em 0.75em;
    text-decoration: none;
  }

  .plan .button:hover,
  .plan .button:focus {
    background-color: #4133B7;
  }

  /* giới thiệu bản thân */
  .flip-card {
    background-color: transparent;
    width: 245px;
    height: 270px;
    perspective: 1000px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .flip-card-inner {
    position: relative;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.6s;
    transform-style: preserve-3d;
  }

  .flip-card-front,
  .flip-card-back {
    position: absolute;
    width: 100%;
    height: 100%;
    padding: 5px;
    border-radius: 2em;
    backface-visibility: hidden;
  }

  .flip-card-front {
    background-color: #B7E3D9;
    border: 4px solid #1700E3;
  }

  .profile-image {
    background-color: transparent;
    border: none;
    margin-top: 15px;
    border-radius: 5em;
    width: 120px;
    height: 120px;
    margin-left: 50px;
  }

  .pfp {
    border-radius: 35em;
    fill: #c143da;
  }

  .name {
    margin-top: 15px;
    font-size: 25px;
    color: #1700E3;
    font-weight: bold;
  }

  .flip-card-back {
    background-color: #1700E3;
    border: 4px solid #B7E3D9;
    transform: rotateY(180deg);
    padding: 11px;
  }

  .description {
    margin-top: 10px;
    font-size: 14px;
    letter-spacing: 1px;
    color: white
  }

  .socialbar {
    background-color: transparent;
    border-radius: 3em;
    width: 90%;
    padding: 14px;
    margin-top: 11px;
    margin-left: 10px;
    word-spacing: 24px;
    color: white;
  }

  .socialbar svg {
    transition: 0.4s;
    width: 20px;
    height: 20px;
    color: #B7E3D9
  }

  .socialbar svg:hover {
    color: yellowgreen;
  }

  .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg);
  }
</style>

<div class="container">
<!-- Row bài viết tin tức -->
    <div class="row justify-content-center">
      <div class="col-md-12 my-3">
        <div id="section3" style="padding: 5px; color: white; background-color: #E30019;">
          <h1 style="text-align: center;">Bài Viết Tin Tức <i class="fa-solid fa-book"></i></h1>
        </div>
        <div class="container mt-3">
          <div class="row my-3">
            <div class="col-sm-4">
              <div class="card1" style=" background-image: url('https://img.freepik.com/free-vector/blue-abstract-hi-speed-internet-technology-background-illustration-eye-scan-virus-computer-motion-move_115579-20.jpg?size=626&ext=jpg'); opacity: 0.9; background-size: cover;">
                <div class="content">
                  <p class="heading">Công Nghệ Thông Tin
                  </p>
                  <p class="para">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                    laboriosam at voluptas minus culpa deserunt delectus sapiente
                    inventore pariatur
                  </p>
                  <button class="btn">Đọc Thêm</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 ">
              <div class="card1" style=" background-image: url('https://thumbs.dreamstime.com/z/megaphone-drawing-conversation-bubble-showing-new-announcement-bullhorn-voice-device-speech-balloon-presenting-fresh-259158453.jpg'); opacity: 0.9; background-size: cover;">
                <div class="content">
                  <p class="heading">Làm Chủ Digital Maketing
                  </p>
                  <p class="para">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                    laboriosam at voluptas minus culpa deserunt delectus sapiente
                    inventore pariatur
                  </p>
                  <button class="btn">Đọc Thêm</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 ">
              <div class="card1" style=" background-image: url('https://image.slidesdocs.com/responsive-images/background/festive-wedding-stage-chinese-powerpoint-background_c0ab199531__655_368.jpg'); opacity: 0.9; background-size: cover;">
                <div class="content">
                  <p class="heading">Ứng Dụng Framer Vô Figma
                  </p>
                  <p class="para">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi
                    laboriosam at voluptas minus culpa deserunt delectus sapiente
                    inventore pariatur
                  </p>
                  <button class="btn">Đọc Thêm</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- End Row bài viết tin tức -->
</div>