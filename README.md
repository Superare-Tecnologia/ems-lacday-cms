# Lacday CMS - WordPress template by IDK Media

This WordPress template was developed and is maintained by <a href="https://idkmedia.co/" target="_blank">IDK Media</a>.

## Getting started

This repository does usage of the basic WordPress features, but with modified structure. It also uses the power of SASS to better maintain code readability and reliability through multiple developers.

### The development

As this template contains usage of SCSS, Modular JS files, Tailwind and Webpack, it relies on Node.js and its package manager (NPM). To run this project at local environment, please, have the following below:

* Node.js 20.11.0 or higher
* NPM 10.5.0 or higher
* Yarn 1.22.22 or higher

After properly configuring your environment, its now time to install all dependencies. Run the command:

```
npm install
```

or if you're using Yarn:

```
yarn install
```

If there are no errors with your installation, you can start you development environment by running the following command(s):

```
npm start
```

or

```
yarn start
```

### Deploying

The deploy method is pretty straightforward.

Before running into any deployments through Duplicator plugins (All In One, Duplicator, etc), you need to run your build command as below:

```
npm run build
```

or 

```
yarn build
```

And after the build has succeeded, you can deploy your version of this theme to our client staging or production environment.