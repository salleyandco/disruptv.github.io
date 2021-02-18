<!DOCTYPE html>
<html <?php language_attributes(); ?> class="disruptv">
  <head>
    <?php wp_head(); ?>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/wp-content/themes/dist/static/media/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="%PUBLIC_URL%/wp-content/themes/dist/static/media/logo192.png" />
    <!--
      manifest.json provides metadata used when your web app is installed on a
      user's mobile device or desktop. See https://developers.google.com/web/fundamentals/web-app-manifest/
    -->
    <link rel="manifest" href="%PUBLIC_URL%/wp-content/themes/dist/manifest.json" />
    <!--
      Notice the use of %PUBLIC_URL%/wp-content/themes/dist in the tags above.
      It will be replaced with the URL of the `public` folder during the build.
      Only files inside the `public` folder can be referenced from the HTML.

      Unlike "/favicon.ico" or "favicon.ico", "%PUBLIC_URL%/wp-content/themes/dist/favicon.ico" will
      work correctly both with client-side routing and a non-root public URL.
      Learn how to configure a non-root public URL by running `npm run build`.
    -->
    <%= htmlWebpackPlugin.tags.headTags %>
  </head>
  <body <?php body_class(); ?>>
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root">
      <!--
        This HTML file is a template.
        If you open it directly in the browser, you will see an empty page.

        You can add webfonts, meta tags, or analytics to this file.
        The build step will place the bundled scripts into the <body> tag.

        To begin the development, run `npm start` or `yarn start`.
        To create a production bundle, use `npm run build` or `yarn build`.
      -->
    <header class="SiteHeader">
      <?php the_custom_logo(); ?>
      <?php get_template_part( 'template_parts/nav', 'site' ); ?>
    </header>