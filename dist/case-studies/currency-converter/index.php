<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php' ?>
  <div class="case--study_bar">
    <?php $website = "http://grooup.barrytickle.com"; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/includes/case-study.php'; ?>
  </div>
  <section class="case--study_block">
    <div class="container-lrg">
      <div class="case--study_hero">
        <h1>Currency Converter</h1>
        <span>Web application</span>
      </div>
    </div>
    <div class="large--banner" style="background-image:url('/images/background/case-study/currency-converter/currency-converter.jpg');"></div>
    <div class="container-lrg section--right">
      <div class="clear--text">
        <h2>
            Technologies used
            <span>Javascript, Ajax, CSS, HTML</span>
        </h2>
      </div>
      <div class="clear--text">
        <h2>
          Developed, for functionality
          <span>
            The application supports cross-browser support, to be suitable for all audiences.
          </span>
      </div>
    </div>
    <div class="border--bottom"></div>
    <div class="container-sml content-container">
      <h2>The brief</h2>
      <p>
        <b>
          I want you to build a self contained currency converter widget that I can add to my web site. It should get the latest exchange rates, include appropriate error checking and validation and be responsive. Don&rsquo;t worry too much about the styling of it, but assume that I would want to use it on <a href="https://www.doggiegadgets.com" target="_blank">https://www.doggiegadgets.com</a> as a tools for customers to use.
        </b>
      </p>
      <p>
      	The aim of the currency converter is to design and develop a widget which can allow the latest exchange rates to be compared. The end idea for this task is to allow the widget to be used on <a href="https://www.doggiegadgets.com" target="_blank">https://www.doggiegadgets.com</a>, the converter itself should fully be client side, for this only javascript, html and css will be used.
      </p>
      <p>
      	The first stage to interpreting how this could be done is to understand what exactly a widget is. (Nations, 2017) defines a web widget as&rdquo; a small program that you can easily put on your website, blog, or personalized start page.&rdquo;. In terms of web, this task will need to focus on speed performance and portability.
      </p>
      <p>
      	Knowing this, the aim of the widget should resemble a small and usable interface which shouldn&rsquo;t hinder on too much of the user&rsquo;s time. The interface which had been designed will consist of an interactive text area, which will automatically populate with results dependent on the user input.
      </p>
      <p>
      	The build for this brief is split into two separate files (index.html and example.php). The index.html will be the widget file itself, while the example.php will provide an example of how the widget will fit into the website. This will be in terms of functionality and branding of the end widget itself, while also providing a demonstration on how it can be embedded within a live site.
      </p>
      <p>
      	To test cross browser testing, the following browsers had been currently tested to ensure that widget can correspond with the functionality of the existing site:
      </p>
      <ul>
      	<li>
      		Internet Explorer 10 +
      	</li>
      	<li>
      		Firefox 59.0
      	</li>
      	<li>
      		Google Chrome 66
      	</li>
      </ul>

      <img src="/images/portfolio/web-design/currency-converter.jpg" alt="Currency converter on example website" title="Currency converter on example website">
      <p>
      	The widget had successfully passed all three tests to provide the support required across all three browsers.
      </p>
      <p>
      	The colours within the application are controlled via JavaScript variables, this will allow future configurations of the widget to be made, colours will be set within variables which provide an instant update towards the styling of the converter. In addition to colours within the system, font had also been taken into account.
      </p>
      <p>
      	To match the styling of the widget to the styling of the site itself, google fonts was required to allow the fonts to be imported within the widget itself. Google provide a reliable service which can host font packs required by the developer. Using this methodology will reduce loading times, while keeping in-brand with the site itself.
      </p>

      <p>
        The widget will work by providing an ajax request to a json api, which will provide the most up to date conversion rates dependent on the input value. This will work on all modern browsers which reduces the amount of limitations which the widget will require. An example of this request can look like this: <a href="https://api.fixer.io/latest?base=GBP" target="_blank">https://api.fixer.io/latest?base=GBP</a>. This shows the latest rates dependant on the "Base" value, the base value is the value which the user wants to convert from. For example, how much is 1 euro to 1 pound? a Euro would be the base value, and a pound will be a key returned within the json.
      </p>
    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php' ?>
