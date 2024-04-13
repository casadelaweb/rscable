import type { Configuration } from 'node_modules/webpack'
import { iEnvVariables, iMode } from './configuration/webpack/config.types'
import path from 'path'
import webpack from 'webpack'
import MiniCssExtractPlugin from 'mini-css-extract-plugin'
import ruleScripts from './configuration/webpack/rules/scripts'
import ruleFavicon from './configuration/webpack/rules/favicon'
import ruleStyles from './configuration/webpack/rules/styles'
import ruleIconfonts from './configuration/webpack/rules/iconfonts'
import ruleImages from './configuration/webpack/rules/images'
import ruleFonts from './configuration/webpack/rules/fonts'
import watchOptions from './configuration/webpack/watchOptions'
import { EsbuildPlugin } from 'esbuild-loader'

function config(env: iEnvVariables): Configuration {
  const mode: iMode = env.mode ?? 'development'
  const isDevelopmentMode: boolean = mode === 'development'
  const isProductionMode: boolean = !isDevelopmentMode

  const rootPath: string = path.resolve(__dirname, './') + '/'

  return {
    mode: mode,
    target: 'browserslist',
    devtool: isDevelopmentMode ? 'source-map' : false,
    optimization: {
      minimize: isProductionMode,
      minimizer: [
        new EsbuildPlugin({
          target: 'es2015',
          css: true,
          legalComments: 'none',
        }),
      ],
    },
    entry: { main: rootPath + 'src/main.ts', },
    output: {
      path: rootPath + 'public/assets',
      filename: 'js/[name].js?v=[contenthash:8]',
      clean: isProductionMode,
    },
    resolve: {
      alias: { 'src': rootPath + 'src', },
      extensions: [
        '.ts',
        '.js',
        '.json',
        '.wasm',
      ],
    },
    plugins: [
      new MiniCssExtractPlugin({
        filename: 'css/[name].css?v=[contenthash:8]',
        chunkFilename: 'css/[name].css?v=[contenthash:8]',
      }),
    ],
    module: {
      rules: [
        ruleFonts(),
        ruleIconfonts(),
        ruleFavicon(),
        ruleImages(),
        ruleStyles(isDevelopmentMode),
        ruleScripts(),
      ],
    },
    watchOptions,
  }
}

export default config
