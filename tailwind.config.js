module.exports = {
  purge: {
    options: {
          safelist: [
                require('purgecss-with-wordpress').whitelist,
                ],
               safelistPatterns: require('purgecss-with-wordpress').whitelistPatterns,
        },
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    variants: {
       display: ['responsive', 'group-hover', 'group-focus'],
     },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
