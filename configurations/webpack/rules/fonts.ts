import { RuleSetRule } from 'node_modules/webpack'

function ruleFonts(): RuleSetRule {
  return {
    test: /(woff|woff2|eot|ttf|otf)$/i,
    type: 'asset/resource',
    include: /fonts/,
    exclude: /img|iconfont/,
    generator: { filename: 'fonts/[name][ext]', },
  }
}

export default ruleFonts
