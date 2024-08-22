<x-www_docs>
  <!-- Page title -->
  <section class="py-2 pb-3 pb-lg-4">
    <span class="badge d-inline-flex align-items-center text-success bg-success-subtle fw-semibold text-decoration-none py-2 px-3 mb-2 rounded-pill">Getting started</span>
    <h1 class="pt-1">설치</h1>
  </section>


  <!-- Disclaimer -->
  <section class="pb-sm-2 mb-5">
    <div class="border-start border-4 border-warning rounded-end-4 shadow overflow-hidden py-3 py-sm-4 px-4 px-sm-5">
      <span class="position-absolute top-0 start-0 w-100 h-100 bg-body-tertiary d-none d-block-dark"></span>
      <div class="position-relative z-1 py-3">
        <h2 class="h4 text-body-emphasis fw-normal lh-base">The <span class="fw-semibold">Cartzilla template</span> you are currently viewing is a <span class="fw-semibold">Static HTML</span> template built with Bootstrap 5, and it is <span class="fw-semibold">NOT a WordPress</span> theme.</h2>
        <p class="fs-lg text-body-secondary mb-0">Please do not attempt to install the Cartzilla files on WordPress, as this will not work.</p>
      </div>
    </div>
  </section>


  <!-- Prerequisites -->
  <section class="cd-section pb-sm-2 mb-5" id="prerequisites">
    <h2 class="h3 pb-1 pb-sm-0 mb-sm-4">Prerequisites</h2>
    <ul class="gap-3">
      <li><span class="text-body-emphasis fw-semibold">HTML / CSS / JS (required):</span> These core web technologies are essential for using the template.</li>
      <li><span class="text-body-emphasis fw-semibold">Bootstrap 5 (required):</span> This framework is necessary for the template's design and functionality.</li>
      <li><span class="text-body-emphasis fw-semibold">Sass / Scss (highly recommended):</span> Utilizing SCSS variables for customizing the template is much easier than modifying plain CSS code directly. It allows for more streamlined style adjustments.</li>
      <li><span class="text-body-emphasis fw-semibold">Npm (highly recommended):</span> npm is a powerful package manager tailored for Node.js, enabling efficient management of project dependencies. This tool helps with installing, updating, and removing dependencies. Additionally, npm includes a feature called "npm scripts," which automates common tasks such as minification, compilation, unit testing, linting, etc.</li>
    </ul>
    <p class="mb-0"><span class="text-body-emphasis fw-semibold">Note:</span> All necessary configuration files, such as <span class="text-body-emphasis fw-medium">package.json</span>, are provided in the download package. For detailed information on each configuration file and its purpose, refer to the <a class="fw-medium" href="configuration.html">Configuration files</a> section of our documentation.</p>
  </section>


  <!-- Dev environment -->
  <section class="cd-section pb-sm-2 mb-5" id="dev-environment">
    <h2 class="h3 pb-1 pb-sm-0 mb-sm-4">Dev environment</h2>
    <div class="alert alert-info text-body-emphasis d-flex py-4 mb-4">
      <i class="ci-info text-info fs-4"></i>
      <div class="ps-2 ps-sm-3 pe-sm-4 w-100">
        <span class="text-info fw-semibold">Please note:</span> The following steps are entirely optional. They are designed for advanced users who wish to leverage a professional-grade front-end toolset included with Cartzilla to accelerate the development process. If you are not familiar with these tools or do not have time to explore them, you can continue to customize Cartzilla using plain HTML, CSS, and JS. In this case, feel free to skip this and next sections. Happy coding! 😉
      </div>
    </div>
    <h3 class="h5 fs-lg pt-1 pt-sm-2">Cartzilla is built using modern web development toolset.</h3>
    <dl class="mb-0">
      <dt>Bootstrap <a class="fw-medium" href="http://getbootstrap.com" target="_blank" rel="noopener">Official website</a></dt>
      <dd class="pb-3 border-bottom">Bootstrap 5 is the latest iteration of the world's most popular HTML, CSS, and JS framework. Cartzilla extends Bootstrap with a variety of its own plugins and components, enriching the core framework to provide enhanced functionality and design options.</dd>
      <dt>Sass (Syntactically Awesome Style Sheets) <a class="fw-medium" href="http://sass-lang.com/" target="_blank" rel="noopener">Official website</a></dt>
      <dd class="pb-3 border-bottom">Sass is a scripting language that is either interpreted or compiled into Cascading Style Sheets (CSS). Recognized as the most mature, stable, and powerful CSS extension language globally, Sass enables the use of variables, mixins, functions, and more to streamline CSS development.</dd>
      <dt>W3C Valid HTML <a class="fw-medium" href="https://html.com/" target="_blank" rel="noopener">Official website</a></dt>
      <dd class="pb-3 border-bottom">The code follows W3C standards for HTML, ensuring that it meets the guidelines established by the World Wide Web Consortium for accessibility, functionality, and compatibility across different browsers and devices.</dd>
      <dt>Future-proof JavaScript <a class="fw-medium" href="https://www.javascript.com/" target="_blank" rel="noopener">Official website</a></dt>
      <dd class="pb-3 border-bottom">Cartzilla's core scripts and all dependencies are meticulously crafted using vanilla JavaScript (ES6 modules) to ensure optimal performance and broad compatibility across various platforms.</dd>
      <dt>Npm (Node.js) <a class="fw-medium" href="https://www.npmjs.com/" target="_blank" rel="noopener">Official website</a></dt>
      <dd class="mb-0">Npm is the default package manager for the Node.js environment. It offers robust package management capabilities and includes a powerful feature known as "Npm scripts." These scripts facilitate repetitive tasks such as minification, compilation, unit testing, and linting. The Silicon build system uses a series of JavaScript files, each designated for specific tasks, and associated Npm scripts to execute these tasks.</dd>
    </dl>
  </section>


  <!-- Text editor or CLI -->
  <section class="cd-section pb-sm-2 mb-5" id="editor-cli">
    <h2 class="h3 pb-1 pb-sm-0 mb-sm-4">Text editor or CLI</h2>
    <p class="mb-4">You can use any text editor and command line tool available to you, such as Command Prompt for Windows or Terminal for macOS. Our personal preference is <a class="fw-medium" href="https://code.visualstudio.com/" target="_blank" rel="noopener">Visual Studio Code.</a> It is a free editor that includes a built-in terminal (console), an integrated Git client, debugging capabilities, a vast library of extensions, and it is available for macOS, Windows, and Linux.</p>
    <div class="alert alert-info text-body-emphasis d-sm-flex py-4 mb-0">
      <i class="ci-info text-info fs-4 mb-2 mb-sm-0"></i>
      <div class="ps-sm-3 pe-sm-5 w-100">
        <span class="text-info fw-semibold">We highly recommend</span> installing the <a class="fw-medium" href="https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode" target="_blank" rel="noopener">VS Code Prettier</a> plugin and setting it as your default formatter for JavaScript. Enable the "format code on save" option to automatically beautify your code each time you save a file, enhancing readability and consistency.
      </div>
    </div>
  </section>


  <!-- Installing Node.js, npm and dependencies -->
  <section class="cd-section mb-3" id="install-node">
    <h2 class="h3 pb-1 pb-sm-0 mb-sm-4">Installing Node.js, npm and dependencies</h2>
    <p>To set up the Cartzilla development environment, you will need to install Node.js and its package manager, npm. Node.js is completely free and can be downloaded from its official website for macOS, Windows, and Linux systems. You can download Node.js and npm from this <a class="fw-medium" href="https://nodejs.org/en/" target="_blank" rel="noopener">link.</a></p>
    <p class="mb-4">For more information about the Node Package Manager and the packages available, please visit <a class="fw-medium" href="https://www.npmjs.com/" target="_blank" rel="noopener">npm's official website.</a></p>
    <h3 class="h5 pt-2">Installing necessary packages for Cartzilla development</h3>
    <p>Once Node.js and npm are installed, you're ready to install all the dependencies required for developing with Cartzilla.</p>
    <p>Open your command line tool and type the following command:</p>
    <kbd class="d-inline-block mb-3">npm install</kbd>
    <p class="mb-0">This command initiates the installation of all dependencies listed in the <code>Cartzilla/package.json</code> file. Please wait until the installation process is complete before proceeding to the next section, <a class="fw-medium" href="npm-scripts.html">Npm commands (scripts).</a></p>
  </section>
</x-www_docs>
