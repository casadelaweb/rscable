import MiniCssExtractPlugin from 'mini-css-extract-plugin'
import { RuleSetRule } from 'node_modules/webpack'

function ruleStyles(isDevelopmentMode: boolean): RuleSetRule {
  const stylesPipeline = {
    development: [
      MiniCssExtractPlugin.loader,
      'css-loader',
      {
        loader: 'sass-loader',
        options: { implementation: require('sass'), },
      },
    ],
    production: [
      MiniCssExtractPlugin.loader,
      'css-loader',
      {
        loader: 'postcss-loader',
        options: { postcssOptions: { plugins: ['postcss-preset-env',], }, },
      },
      {
        loader: 'sass-loader',
        options: { implementation: require('sass'), },
      },
    ],
  }

  return {
    test: /\.(css|sass|scss)$/i,
    use: isDevelopmentMode ? stylesPipeline.development : stylesPipeline.production,
  }
}

export default ruleStyles
