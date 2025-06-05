<?php
/* Template Name: About */
get_header();
?>
<main class="about-main">
    <section class="about-hero">
        <h2 class="section-title"><span class="slash">/</span>about-me</h2>
        <p class="subtitle">Who am i?</p>
        <div class="about-flex">
            <div class="about-info">
                <p>Hello, i'm Xitiz!</p>
                <p>I'm a self-taught front-end developer based in Kyiv, Ukraine. I can develop responsive websites from scratch and raise them into modern user-friendly web experiences.</p>
                <p>Transforming my creativity and knowledge into a websites has been my passion for over a year. I have been helping various clients to establish their presence online. I always strive to learn about the newest technologies and frameworks.</p>
            </div>
            <div class="about-img-deco">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hooded2.png" alt="Xitiz" />
                <div class="dot-grid">
                    <?php for($i=0;$i<25;$i++) echo '<span></span>'; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="skills" id="skills">
        <h2 class="section-title">#skills</h2>
        <div class="skills-list">
            <div class="skill-box"><strong>Languages</strong><br>TypeScript Lua<br>Python JavaScript</div>
            <div class="skill-box"><strong>Other</strong><br>HTML CSS EJS SCSS<br>REST Jinja</div>
            <div class="skill-box"><strong>Tools</strong><br>VSCode Neovim Linux<br>Figma XFCE Arch<br>Git Font Awesome<br>KDE fish</div>
            <div class="skill-box"><strong>Databases</strong><br>SQLite PostgreSQL<br>Mongo</div>
            <div class="skill-box"><strong>Frameworks</strong><br>React Vue<br>Disnake Discord.js<br>Flask Express.js</div>
        </div>
    </section>
    <section class="fun-facts">
        <h2 class="section-title">#my-fun-facts</h2>
        <div class="facts-list">
            <span class="fact">I like winter more than summer</span>
            <span class="fact">I often bike with my friends</span>
            <span class="fact">I like pizza and pasta</span>
            <span class="fact">I was in Egypt, Poland and Turkey</span>
            <span class="fact">My favorite movie is <span class="highlight">The Green Mile</span></span>
            <span class="fact">I am still in school</span>
            <span class="fact">I don't have any siblings</span>
        </div>
        <div class="dot-grid" style="right:5%;top:80%;position:absolute;">
            <?php for($i=0;$i<25;$i++) echo '<span></span>'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?> 