module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      screens: {
        //extra small screen for small mobiles
        'xs': '512px',
      },
      colors: {
        'bg': '#fbfcfc',
        'main': '#ECFFDC',
        'highlight': '#efdcff',
        'shade': '#939f89',
        'dark': '#586052'
      }
    },
  },
  plugins: [],
}
