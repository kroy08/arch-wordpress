<?php get_header()?>

<section class="project__banner">
      <div class="container">
        <div class="project__banner__wrapper">
          <h1><?php the_title()?></h1>
          <img src="<?php the_field('thumbnail')?>" alt="" />
        </div>
      </div>
    </section>

    <section class="project__blurb">
      <div class="container">
        <div class="project__container">
          <h2>
            <?php the_title()?>
          </h2>
        </div>
      </div>
    </section>

    <section class="project__about">
      <div class="project__container">
        <div class="project__about__grid">
          <h3><?php the_field('category')?></h3>
          <div class="project__about__content">
            <p>
              <?php the_content()?>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="project__gallery">
      <div class="container">
        <div class="project__slider">
          <div class="slider__arrows">
            <div class="arrow-next">
              <img src="./images/arrow.svg" alt="" />
            </div>

            <div class="arrow-prev">
              <img src="./images/arrow.svg" alt="" />
            </div>
          </div>
          <div class="slider__main">
            <div class="slider">
              <div class="slider__item">
                <img src="./images/banner_sm.jpg" alt="" />
              </div>

              <div class="slider__item">
                <img src="./images/banner_sm.jpg" alt="" />
              </div>

              <div class="slider__item">
                <img src="./images/banner_sm.jpg" alt="" />
              </div>

              <div class="slider__item">
                <img src="./images/banner_sm.jpg" alt="" />
              </div>

              <div class="slider__item">
                <img src="./images/banner_sm.jpg" alt="" />
              </div>

              <div class="slider__item">
                <img src="./images/banner_sm.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="project__about">
      <div class="project__container">
        <div class="project__about__grid">
          <h3>Furniture</h3>
          <div class="project__about__content">
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum unde
              voluptate culpa impedit obcaecati porro voluptates reiciendis
              doloribus pariatur magni?
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
              dolores architecto dolorem dolor. Perspiciatis officiis enim
              libero officia neque ad, blanditiis laborum, cumque at consequatur
              porro voluptas unde rerum est.
            </p>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
              est reiciendis eaque illo itaque accusantium voluptas quas totam
              sed harum vero porro tempora commodi eos tenetur fuga similique
              deserunt, beatae dicta illum veniam repellat ipsa? Provident sit
              iure neque quae sed repellat veniam molestiae, esse totam minima
              enim debitis, ab, dolor soluta praesentium? Incidunt eligendi
              exercitationem assumenda ullam vero quibusdam.
            </p>
          </div>
        </div>
      </div>
    </section>

<?php get_footer()?>