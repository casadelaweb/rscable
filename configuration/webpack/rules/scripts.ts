import { RuleSetRule } from 'node_modules/webpack'

function ruleScripts(): RuleSetRule {
  return {
    test: /\.(js|ts)$/,
    exclude: /node_modules/,
    use: {
      loader: 'swc-loader',
      options: {
        minify: false,
        jsc: {
          target: 'es2015',
          loose: false,
          minify: {
            compress: false,
            mangle: false,
          },
        },
      },
    },
  }
}

export default ruleScripts
