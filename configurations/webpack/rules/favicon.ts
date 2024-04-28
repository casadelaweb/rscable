import { RuleSetRule } from 'node_modules/webpack'

function ruleFavicon(): RuleSetRule {
  return {
    test: /(ico|png|webmanifest|svg|xml)$/i,
    include: /favicon/,
    exclude: /node_modules|img|iconfont|iconfonts|fonts/,
    type: 'asset/resource',
    generator: { filename: './[name][ext]', },
  }
}

export default ruleFavicon
