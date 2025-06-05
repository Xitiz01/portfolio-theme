<?php
/* Template Name: Projects
    
*/
get_header();
?>
<main class="projects-main">
    <section class="projects-hero">
        <h2 class="section-title"><span class="slash">/</span>projects</h2>
        <p class="subtitle">List of my projects</p>
    </section>
    <section class="complete-apps">
        <h2 class="section-title">#complete-apps</h2>
        <div class="project-list">
            <div class="project-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/chertnodes.png" alt="ChertNodes" />
                <div class="project-info">
                    <div class="tech">HTML SCSS Python Flask</div>
                    <h3>ChertNodes</h3>
                    <p>Minecraft servers hosting</p>
                    <a class="btn" href="#">Live</a>
                    <a class="btn secondary" href="#">Cached</a>
                </div>
            </div>
            <div class="project-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kahoot.png" alt="Kahoot Answers" />
                <div class="project-info">
                    <div class="tech">CSS Express Node.js</div>
                    <h3>Kahoot Answers Viewer</h3>
                    <p>Get answers to your kahoot quiz</p>
                    <a class="btn" href="#">Live</a>
                </div>
            </div>
            <div class="project-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/protectx.png" alt="ProtectX" />
                <div class="project-info">
                    <div class="tech">React Express Discord.js Node.js</div>
                    <h3>ProtectX</h3>
                    <p>Discord anti-crash bot</p>
                    <a class="btn secondary" href="#">Cached</a>
                </div>
            </div>
            <div class="project-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kotikbot.png" alt="Kotik Bot" />
                <div class="project-info">
                    <div class="tech">HTML CSS JS</div>
                    <h3>Kotik Bot</h3>
                    <p>Multi-functional discord bot</p>
                    <a class="btn" href="#">Live</a>
                </div>
            </div>
            <div class="project-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio.png" alt="Portfolio" />
                <div class="project-info">
                    <div class="tech">Vue TS Less</div>
                    <h3>Xitiz Portfolio</h3>
                    <p>You're using it rn</p>
                    <a class="btn secondary" href="#">Github</a>
                </div>
            </div>
        </div>
    </section>
    <section class="small-projects">
        <h2 class="section-title">#small-projects</h2>
        <div class="project-list">
            <div class="project-card">
                <div class="project-info">
                    <div class="tech">Discord.js TS JS</div>
                    <h3>Bot boilerplate</h3>
                    <p>Start creating scalable discord.js bot with typescript in seconds</p>
                    <a class="btn secondary" href="#">Github</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-info">
                    <div class="tech">VUE CSS JS</div>
                    <h3>My blog</h3>
                    <p>Front-end of my future blog website written in vue</p>
                    <a class="btn secondary" href="#">Github</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-info">
                    <div class="tech">Figma</div>
                    <h3>Chess pro</h3>
                    <p>Figma landing page about service for viewing chess tournaments</p>
                    <a class="btn secondary" href="#">Figma</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-info">
                    <div class="tech">Figma</div>
                    <h3>Crash protect website</h3>
                    <p>Figma template for website about anti-raid, anti-crash discord bot</p>
                    <a class="btn secondary" href="#">Figma</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-info">
                    <div class="tech">HTML CSS</div>
                    <h3>CSS expirement</h3>
                    <p>Collection of my different little projects in css</p>
                    <a class="btn" href="#">Live</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-info">
                    <div class="tech">Lua NeoVim</div>
                    <h3>Web Dev nvim config</h3>
                    <p>Config for neovim perfect for web developer</p>
                    <a class="btn secondary" href="#">Github</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-info">
                    <div class="tech">Python Quart HTML</div>
                    <h3>Ooku</h3>
                    <p>Simple link shortener with auth</p>
                    <a class="btn" href="#">Live</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-info">
                    <div class="tech">Figma</div>
                    <h3>School website</h3>
                    <p>Figma template website for my school</p>
                    <a class="btn secondary" href="#">Figma</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?> 