type iOSName = 'Mac OS' | 'iOS' | 'Windows' | 'Android' | 'Linux'

export function getOS(): iOSName {
  const userAgent = window.navigator.userAgent,
    // @ts-ignore
    platform = window.navigator?.userAgentData?.platform || window.navigator.platform,
    macosPlatforms = [
      'macOS',
      'Macintosh',
      'MacIntel',
      'MacPPC',
      'Mac68K',
    ],
    windowsPlatforms = [
      'Win32',
      'Win64',
      'Windows',
      'WinCE',
    ],
    iosPlatforms = ['iPhone', 'iPad', 'iPod',]
  let os = null

  if (macosPlatforms.indexOf(platform) !== -1) {
    os = 'Mac OS'
  } else if (iosPlatforms.indexOf(platform) !== -1) {
    os = 'iOS'
  } else if (windowsPlatforms.indexOf(platform) !== -1) {
    os = 'Windows'
  } else if (/Android/.test(userAgent)) {
    os = 'Android'
  } else if (/Linux/.test(platform)) {
    os = 'Linux'
  }

  return os
}
