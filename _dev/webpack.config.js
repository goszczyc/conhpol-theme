const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");

const path = require("path");
const localDomain = "http://conhpol.test";

module.exports = {
	entry: ["./sass/screen.scss", "./js/main.js"],
	output: {
		path: path.resolve(__dirname, "../dist"),
		filename: "js/[name].js",
	},
	module: {
		rules: [
			{
				test: /\.m?js$/,
				exclude: /(node_modules|bower_components)/,
				use: {
					loader: "babel-loader",
					options: {
						presets: ["@babel/preset-env"],
						plugins: [["@babel/transform-runtime"]],
					},
				},
			},
			{
				test: [/\.sass$/i, /\.scss$/i, /\.css$/i],
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: "css-loader"
					},
					{
						loader: "postcss-loader",
						options: {
							sourceMap: true,
							postcssOptions: {
								plugins: [
									[
										"postcss-preset-env",
										{
											browsers: "last 6 versions",
										},
									],
								],
							},
						},
					},
					{
						loader: "sass-loader",
						options: {
							sourceMap: true,
						},
					},
				],
			},
		],
	},
	optimization: {
		minimizer: [
			new CssMinimizerPlugin(),
			// For webpack@5 you can use the `...` syntax to extend existing minimizers (i.e. `terser-webpack-plugin`), uncomment the next line
			`...`,
			new TerserPlugin({
				minify: TerserPlugin.uglifyJsMinify,
				// `terserOptions` options will be passed to `uglify-js`
				// Link to options - https://github.com/mishoo/UglifyJS#minify-options
				terserOptions: {},
			}),
		],
		minimize: true
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: "stylesheets/[name].css",
		}),

		new BrowserSyncPlugin(
			{
				// browse to http://localhost:3000/ during development,
				// ./public directory is being served
				proxy: localDomain,
				files: [
					"./../",
					"./../**/*.php",
					"./../*.php",
					"./",
					"!./node_modules",
					"!./yarn-error.log",
					"!./package.json",
					"!./style.css.map",
					"!./app.js.map",
				],
				injectCss: true,
				online: true
			},
			{ reload: false }
		),
	],
};
