---
name: smart-search
description: Smart search capabilities for Framer template analysis and Mahsoul content discovery
---

## Smart Search with OpenCLI

### Content Search Patterns

#### Find Design Tokens
```bash
# Search for color usage
opencli browser evaluate "
  const colors = new Set();
  document.querySelectorAll('*').forEach(el => {
    const s = getComputedStyle(el);
    ['color', 'backgroundColor', 'borderColor', 'outlineColor'].forEach(prop => {
      const val = s[prop];
      if (val && val !== 'rgba(0, 0, 0, 0)' && val !== 'transparent') colors.add(val);
    });
  });
  console.log([...colors].sort().join('\\n'));
"
```

#### Find Component Patterns
```bash
# Find all buttons
opencli browser extract "button, a.btn, .btn" --html --all

# Find all cards
opencli browser extract ".card, .product-card, .article-card" --html --css --all

# Find all forms
opencli browser extract "form" --html --all

# Find all inputs
opencli browser extract "input, select, textarea" --html --all

# Find navigation elements
opencli browser extract "nav, header nav, .navigation" --html --css --all
```

#### Find Specific Framer Patterns
```bash
# Find Framer stack components
opencli browser extract "[data-framer-name], [data-framer-component]" --html --all

# Find Framer variants
opencli browser extract "[data-framer-variant]" --html --all

# Find Framer motion/animation
opencli browser extract "[style*='transform'], [style*='transition'], [class*='animate']" --html --all
```

#### Color Analysis
```bash
# Extract all unique colors
opencli browser evaluate "
  const colors = { bg: new Set(), text: new Set(), border: new Set() };
  document.querySelectorAll('*').forEach(el => {
    const s = getComputedStyle(el);
    if (s.backgroundColor && s.backgroundColor !== 'rgba(0, 0, 0, 0)') colors.bg.add(s.backgroundColor);
    if (s.color && s.color !== 'rgba(0, 0, 0, 0)') colors.text.add(s.color);
    if (s.borderColor && s.borderColor !== 'rgba(0, 0, 0, 0)') colors.border.add(s.borderColor);
  });
  console.log('Background:', [...colors.bg].join('\\n'));
  console.log('---');
  console.log('Text:', [...colors.text].join('\\n'));
  console.log('---');
  console.log('Border:', [...colors.border].join('\\n'));
"
```

#### Font Analysis
```bash
opencli browser evaluate "
  const fonts = new Set();
  document.querySelectorAll('*').forEach(el => {
    const s = getComputedStyle(el);
    if (s.fontFamily) fonts.add(s.fontFamily);
  });
  console.log([...fonts].join('\\n'));
"
```

#### Spacing & Layout Analysis
```bash
# Find all spacing values
opencli browser evaluate "
  const spacing = new Set();
  document.querySelectorAll('*').forEach(el => {
    const s = getComputedStyle(el);
    ['padding', 'paddingTop', 'paddingRight', 'paddingBottom', 'paddingLeft',
     'margin', 'marginTop', 'marginRight', 'marginBottom', 'marginLeft',
     'gap', 'gridGap'].forEach(prop => {
      const val = s[prop];
      if (val && val !== '0px') spacing.add(val);
    });
  });
  console.log([...spacing].sort().join('\\n'));
"
```

#### Framer-Specific Search
```bash
# Find all Framer components
opencli browser extract "[data-framer-component], [data-framer-name], [data-framer-variant]" --html --all

# Find Framer motion values
opencli browser extract "[style*='transform'], [style*='transition'], [class*='framer']" --html --all

# Find CMS content
opencli browser extract "[data-cms], [data-framer-cms]" --html --all

# Find interactive elements
opencli browser extract "button, a[href], [role='button'], input[type='submit'], input[type='button']" --html --all

# Find forms
opencli browser extract "form" --html --all --format json
```

### Mahsoul-Specific Searches
```bash
# Find all Mahsoul components
opencli browser open https://mahsoul.ma/
opencli browser extract ".card-eco, .btn-eco, .btn-sun, .input-eco, .eco-eyebrow" --html --all

# Find all forms
opencli browser extract "form" --html --all

# Find all inputs
opencli browser extract "input, select, textarea" --html --all --format json

# Find all tables
opencli browser extract "table" --html --all

# Find all modals/dialogs
opencli browser extract "[role='dialog'], .modal, .dialog" --html --all

# Find all dropdowns
opencli browser extract "[role='menu'], .dropdown, select" --html --all

# Find all tabs
opencli browser extract "[role='tablist'], .tabs, [role='tab']" --html --all
```