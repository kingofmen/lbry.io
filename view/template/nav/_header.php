<?php if (!defined('HEADER_RENDERED')): ?>
  <?php define('HEADER_RENDERED', 1) ?>
  <?php extract([
    'isDark' => false,
    'isAbsolute' => false,
    'isLogoOnly' => false,
    'isBordered' => true
  ], EXTR_SKIP) ?>
  <header class="header<?php echo $isDark ? ' header--dark' : ' header--light' ?>">
    <div class="inner-wrap">
      <a href="/" class="header__logo">LBRY</a>

      <nav class="header__navigation">
        <ul class="header__navigation-parent">
          <li>Community</li>

          <div class="header__navigation-children-wrap">
            <ul class="header__navigation-children inner-wrap">
              <li class="flex-half">
                <a href="/get">
                  <strong>Use LBRY</strong>
                  <span>Get the most out of LBRY</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="/faq">
                  <strong>FAQ</strong>
                  <span>Got questions? We might have answers!</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Blockchain Explorer</strong>
                  <span>The history of LBRY’s blockchain</span>
                </a>
              </li>

              <li class="flex-half">
                <div>
                  <strong>Social</strong>
                  <span>Connect with the LBRY team on your favorite platform</span>
                  <a href="https://www.facebook.com/lbryio">Facebook</a>
                  <a href="https://twitter.com/lbryio">Twitter</a>
                </div>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Tour</strong>
                  <span>Do you want to learn how to publish content to the LBRY network?</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="/news">
                  <strong>News</strong>
                  <span>The latest happenings with the LBRY team and community</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Chat</strong>
                  <span>Chat with other LBRY users and LBRY team members</span>
                </a>
              </li>
            </ul>
          </div>
        </ul>

        <ul class="header__navigation-parent">
          <li>Creators</li>

          <div class="header__navigation-children-wrap">
            <ul class="header__navigation-children inner-wrap">
              <li class="flex-half">
                <a href="/youtube">
                  <strong>YouTube Partner Program</strong>
                  <span>Bring all your content to LBRY with just a few clicks</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Creator FAQ</strong>
                  <span>Like the FAQ, but for Creators</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="https://lbry.fund">
                  <strong>Fund a Project</strong>
                  <span>How to to get some LBC for your latest idea or project</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Creator Tour</strong>
                  <span>XYZXYZXYZ</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Makers</strong>
                  <span>Would you like to share and sell 3D printable files?</span>
                </a>
              </li>
            </ul>
          </div>
        </ul>

        <ul class="header__navigation-parent">
          <li>Company</li>

          <div class="header__navigation-children-wrap">
            <ul class="header__navigation-children inner-wrap">
              <li class="flex-half">
                <a href="/team">
                  <strong>Team / About</strong>
                  <span>Meet the people building LBRY and find out why they’re doing it</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="/join-us">
                  <strong>Join Us</strong>
                  <span>Work with the LBRY team</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="">
                  <strong>Contact</strong>
                  <span>Have a question or want to connect with the LBRY, Inc. team?</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="/credit-reports">
                  <strong>Credit Reports</strong>
                  <span>Four times a year we share the current state of LBRY, Inc.'s balance sheet</span>
                </a>
              </li>
            </ul>
          </div>
        </ul>

        <ul class="header__navigation-parent">
          <li>Developers</li>

          <div class="header__navigation-children-wrap">
            <ul class="header__navigation-children inner-wrap">
              <li class="flex-half">
                <a href="https://lbry.tech">
                  <strong>LBRY.tech</strong>
                  <span>Find out how the heck all of this works</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="https://github.com/lbryio/lbry.io">
                  <strong>GitHub</strong>
                  <span>The LBRY code is open source, check out the repos</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="https://lbry.tech/contribute">
                  <strong>Contributor's Guide</strong>
                  <span>Tips and guidelines for being a contributor to the LBRY projects</span>
                </a>
              </li>

              <li class="flex-half">
                <a href="https://forum.lbry.tech">
                  <strong>Forum</strong>
                  <span>If you have a question for the LBRY, Inc. development team, post it here</span>
                </a>
              </li>
            </ul>
          </div>
        </ul>
      </nav>

      <span class="header__download">
        <?php echo View::render('download/_downloadButton', ['buttonStyle' => 'primary'])?>
      </span>
    </div>
  </header>
<?php endif ?>
