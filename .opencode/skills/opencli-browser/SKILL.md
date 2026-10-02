---
name: opencli-browser
description: Low-level browser automation primitives for OpenCLI
---

## OpenCLI Browser Commands

### Navigation
```bash
opencli browser open <url>                    # Navigate to URL
opencli browser back                          # Go back
opencli browser forward                       # Go forward
opencli browser refresh                       # Refresh page
opencli browser navigate <url>                # Navigate with options
```

### Page State
```bash
opencli browser state                         # Get full page state
opencli browser state --dom                   # Get DOM only
opencli browser state --cookies               # Get cookies
opencli browser state --local-storage         # Get localStorage
opencli browser state --session-storage       # Get sessionStorage
```

### Content Extraction
```bash
opencli browser extract <selector>            # Extract text content
opencli browser extract <selector> --html     # Get outerHTML
opencli browser extract <selector> --css      # Get computed styles
opencli browser extract <selector> --attr <attr>  # Get attribute
opencli browser extract <selector> --all      # Get all matches
opencli browser extract <selector> --format json  # JSON output
```

### Interaction
```bash
opencli browser click <selector>              # Click element
opencli browser click <selector> --count 2    # Double click
opencli browser click <selector> --button right  # Right click
opencli browser type <selector> <text>        # Type text
opencli browser type <selector> <text> --delay 50  # Slow typing
opencli browser select <selector> <value>     # Select option
opencli browser check <selector>              # Check checkbox
opencli browser uncheck <selector>            # Uncheck checkbox
opencli browser hover <selector>              # Hover element
opencli browser focus <selector>              # Focus element
opencli browser press <key>                   # Press key
opencli browser press <key> --modifiers ctrl  # With modifier
```

### Scrolling & Viewport
```bash
opencli browser scroll <x> <y>                # Scroll to position
opencli browser scroll --top                  # Scroll to top
opencli browser scroll --bottom               # Scroll to bottom
opencli browser scroll <selector> --into-view # Scroll element into view
opencli browser viewport --width 1366 --height 768  # Set viewport
```

### Screenshots & Media
```bash
opencli browser screenshot                    # Screenshot viewport
opencli browser screenshot --full-page        # Full page screenshot
opencli browser screenshot --selector <sel>   # Element screenshot
opencli browser screenshot --format png --path ./shot.png
opencli browser pdf                           # Generate PDF
```

### JavaScript Execution
```bash
opencli browser evaluate <js-code>            # Execute JS
opencli browser evaluate --file script.js    # From file
```

### Waiting
```bash
opencli browser wait <selector>               # Wait for element
opencli browser wait <selector> --timeout 30000
opencli browser wait-for-network-idle         # Wait for network
opencli browser wait-for-load                 # Wait for page load
opencli browser wait-for <js-condition>       # Custom condition
```

### Framer Template Analysis
```bash
# Get computed styles for design tokens
opencli browser evaluate "
  const tokens = { colors: {}, fonts: {}, spacing: {} };
  document.querySelectorAll('*').forEach(el => {
    const s = getComputedStyle(el);
    if (s.color) tokens.colors[s.color] = true;
    if (s.backgroundColor) tokens.bg = s.backgroundColor;
    if (s.fontFamily) tokens.fonts = tokens.fonts || []; tokens.fonts.push(s.fontFamily);
  });
  console.log(JSON.stringify(tokens, null, 2));
"
```

### Framer Component Extraction
```bash
# Extract product card component
opencli browser open https://mahsoul.framer.website/shop
opencli browser extract ".product-card" --html --css

# Extract hero section
opencli browser extract "section:first-of-type" --html --css

# Extract navigation
opencli browser extract "nav" --html --css

# Extract footer
opencli browser extract "footer" --html --css
```

### Sitemap Extraction
```bash
opencli browser open https://mahsoul.framer.website/sitemap.xml
opencli browser extract "loc" --text
```