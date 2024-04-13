import { RuleSetRule } from 'node_modules/webpack'

function ruleVue(): RuleSetRule {
  return {
    test: /\.vue$/,
    loader: 'vue-loader',
  }
}

export default ruleVue