# Google PageSpeed 100/100 WordPress Theme

A dark-themed WordPress theme built for speed. No page builders, no drag and drop, no bloat. Just clean PHP, HTML, CSS, JavaScript, and Bootstrap 5.3.

## Why This Theme?

After 25+ years in web development, I got tired of bloated themes with features I'll never use. So I built this - a fast, modern WordPress theme that scores **100/100 on Google PageSpeed**.

No fancy page builders. No drag and drop. Just code that works.

## What You Get

- **Dark UI** that looks modern without overwhelming your content
- **Bootstrap 5.3** foundation for responsive design that just works
- **Custom page templates** for Work, Skills, and Life pages
- **Blog support** with categories, archives, and reading time estimates
- **Aurora logo animation** for that subtle personality touch
- **Custom scrollbars** and text selection styling

## The Color Palette

Built around a vibrant green that pops against dark backgrounds:

```diff
! Primary Green:      #2e981b  (the star of the show)
```
```diff
- Dark Background:    #1a1a1a
```
```diff
- Darker Background:  #0d0d0d  (for depth)
```
```diff
+ Light Text:         #e6e6e6
```
```diff
# Muted Text:         #a0a0a0
```
```diff
- Card Background:    #1f1f1f
```
```diff
- Border Color:       #2a2a2a
```

## Getting Started

1. Upload to `/wp-content/themes/mbstech`
2. Go to Appearance → Themes in WordPress admin
3. Activate "mbsTECH"
4. Done

## What's Inside

### Template Files

- **[style.css](style.css)** - All the styling magic. CSS variables for easy customization, dark theme, custom scrollbars, responsive design
- **[functions.php](functions.php)** - Theme setup, menus, post meta, reading time calculation
- **[header.php](header.php)** - Sticky navigation with Bootstrap navbar and Aurora logo animation
- **[footer.php](footer.php)** - Social links and footer content
- **[index.php](index.php)** - Homepage with hero section, services tabs, tech stack slider, blog posts, code snippets, and timeline
- **[single.php](single.php)** - Clean blog post layout
- **[archive.php](archive.php)** - Category and date archives
- **[page-work.php](page-work.php)** - Portfolio showcase template
- **[page-skillz.php](page-skillz.php)** - Skills display with icons and ratings
- **[page-life.php](page-life.php)** - Personal interests and project timeline
- **[page-no-header-footer.php](page-no-header-footer.php)** - Bare template for demos or embeds with no header and footer

### Custom Templates

Want to use a custom template?

1. Create a new page in WordPress
2. In the page editor, find the "Template" dropdown
3. Select your template (Work Page, Skills Page, Life Page, etc.)
4. Add content and publish

### The Homepage Experience

The [index.php](index.php) homepage isn't just a blog roll - it's a full experience:

- Hero section with animated text and code preview card
- Tabbed services covering WordPress Development, Web Applications, and Support
- Tech stack slider showing skills across Frontend, Backend, CMS, and DevOps
- Recent blog posts (first post featured, then 6 more in a grid)
- Code snippet cards with PHP, JavaScript, and SQL examples
- Timeline from 1999 to 2025
- CTA section with Bootstrap popover for contact

## Making It Yours

### Change the Colors

Edit the CSS variables in [style.css](style.css):

```css
:root {
  --primary-green: #2e981b;  /* Change this to your brand color */
  --dark-bg: #1a1a1a;
  --darker-bg: #0d0d0d;
  --light-text: #e6e6e6;
  --muted-text: #a0a0a0;
  --card-bg: #1f1f1f;
  --border-color: #2a2a2a;
}
```

### Add Your Logo

1. Appearance → Customize
2. Site Identity
3. Upload logo
4. Save & Publish

### Set Up Navigation

1. Appearance → Menus
2. Create menu
3. Add items
4. Assign to "Primary Menu" location
5. Save

## Theme Functions

Built-in PHP functions you get out of the box:

- **`mbstech_reading_time()`** - Calculates post reading time (200 words per minute)
- **`mbstech_post_categories()`** - Displays category badges
- **`mbstech_post_meta()`** - Shows post date, author, and reading time
- **`mbstech_pagination()`** - Bootstrap-styled pagination with touch swipe
- **`mbstech_excerpt_length()`** - Sets excerpt to 30 words
- **`Bootstrap_Nav_Walker`** - Custom walker for Bootstrap 5 navigation

## Performance Features

What makes this theme fast:

- Minimal dependencies (just Bootstrap via CDN)
- Clean code structure
- Optimized asset loading
- No database bloat
- No page builder overhead
- Custom scrollbar styling that doesn't slow things down

## Browser Support

Works on all modern browsers:

- Chrome
- Firefox
- Safari
- Edge

## Dual Purpose Use

Here's something cool - you can use this as a full WordPress theme, OR extract the HTML/CSS/Bootstrap structure and use it as a static site. The templates are clean enough that they work both ways.

## The Philosophy

This theme is built on principles I care about after 25+ years in web dev:

- **Performance matters** - Every kilobyte counts
- **Clean code is maintainable code** - Future me will thank present me
- **Design should enhance content** - Not compete with it
- **Accessibility matters** - Semantic HTML, proper contrast ratios

## Try It Live

See it in action at [mbstech.dk](https://mbstech.dk)

## What I Learned Building This

It's easy to add features, but harder to know when to stop. I wanted something that felt complete without being bloated. The dark theme was deliberate - I spend a lot of time looking at screens and prefer interfaces that are easy on the eyes.

Plus, after 25+ years of web development, you accumulate opinions about how things should work. This theme is those opinions in code form.

## Technical Details

### Glowing Effects & Animations

The theme features subtle glowing effects throughout that add depth and interactivity:

**1) Hover Effects**
- **Buttons**: Lift up 2px on hover with green glow shadow (`box-shadow: 0 4px 12px rgba(46, 152, 27, 0.4)`)
- **Post Cards**: Lift 4px, border turns green, and gets a dark shadow on hover
- **Skill Icons**: Scale up to 1.05x, lift 5px, and glow with green shadow (`box-shadow: 0 0px 20px rgba(46, 152, 27, 0.4)`)
- **Timeline Cards**: Border glows green and lifts 4px when you hover over them
- **Code Preview Cards**: Lift 8px on hover for a floating effect
- **Tech Items**: Border glows green and lifts 4px on hover
- **Snippet Cards**: Same lift and glow effect with dark shadow

**2) Timeline Section**
- **Timeline Markers**: All markers have a permanent green glow (`box-shadow: 0 4px 12px rgba(46, 152, 27, 0.4)`)
- **Current Timeline Item**: Features a pulsing animation that breathes between normal glow and intense glow
  - Animation cycles every 2 seconds
  - Pulses between `box-shadow: 0 4px 12px rgba(46, 152, 27, 0.4)` and `box-shadow: 0 4px 24px rgba(46, 152, 27, 0.8)`
  - Uses gradient background for extra emphasis

**3) Section Effects**
- **CTA Card**: Has a permanent soft green glow (`box-shadow: 0 8px 32px rgba(46, 152, 27, 0.2)`) with gradient background
- **Code Dots**: Subtle opacity animation on the code preview window dots
- **Aurora Logo**: Flowing gradient animation that cycles through white → gray → green → gray → white

All transitions use `transition: all 0.3s ease` for smooth, natural movement. The green glow color `rgba(46, 152, 27, 0.4)` is consistent throughout, creating a unified visual language.

### Custom Scrollbars
Styled for both Webkit and Firefox browsers with the primary green color.

### Text Selection Styling
Selected text gets highlighted in the primary green to reinforce the brand.

### Interactive Elements
Every interactive element has smooth transitions with subtle lift effects and green glows on hover, creating a cohesive, modern feel.

### Tech Stack Display
Skills organized into clear categories:
- Web Development (HTML5, CSS3, JavaScript, PHP, MySQL, etc.)
- CMS & E-commerce (WordPress, WooCommerce, PrestaShop, etc.)
- Design Tools (GIMP, Figma, Photoshop, etc.)
- LLM Tools (Ollama, Claude, ChatGPT, etc.)
- System & Infrastructure (Linux, Docker, Bash, etc.)
- Development Tools (VS Code, Git, npm, etc.)
- Optimization (Speed, Security, Troubleshooting)

## Credits

- **Design**: Custom dark UI
- **Framework**: Bootstrap 5.3
- **Author**: Michael Bay Sørensen
- **Website**: [mbstech.dk](https://mbstech.dk)
- **GitHub**: [@mbs1337](https://github.com/mbs1337)
- **Twitter**: [@baysorensen](https://twitter.com/baysorensen)

## Changelog

**Version 0.9.0** (2025-10-05)
- Initial release
- Dark theme with modern UI
- Bootstrap 5.3 integration
- Custom page templates (Work, Skills, Life)
- Responsive navigation with mobile menu
- Post categories and meta display
- Reading time calculation
- Aurora logo animation
- Custom scrollbars
- Social media integration
- 100/100 Google PageSpeed score

## Get Help

- **Email**: contact@mbstech.dk
- **GitHub Issues**: [github.com/mbs1337](https://github.com/mbs1337)
- **Twitter**: [@baysorensen](https://twitter.com/baysorensen)

## License

GNU General Public License v2 or later
[http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

---

Built by someone who was tired of bloated themes. Made for people who value speed and clean code.
