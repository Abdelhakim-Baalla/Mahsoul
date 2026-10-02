---
name: opencli-operate
description: Operate OpenCLI browser commands for Framer template analysis and Mahsoul testing
---

## OpenCLI Browser Operations

### Prerequisites
- opencli installed globally (`npm install -g @jackwener/opencli`)
- Chrome with OpenCLI extension installed
- `opencli doctor` passes

### Key Commands

#### Browser Session Management
```bash
# Bind current tab
opencli browser bind

# Open URL
opencli browser open <url>

# Get page state
opencli browser state

# Extract content
opencli browser extract <selector> [--html] [--css] [--text]

# Interact
opencli browser click <selector>
opencli browser type <selector> <text>
opencli browser select <selector> <value>
```

#### Sitemap & Analysis
```bash
# Get sitemap
opencli browser sitemap https://mahsoul.framer.website

# Extract all links
opencli browser extract "a[href]" --attribute href

# Extract design tokens
opencli browser evaluate "
  const tokens = {};
  document.querySelectorAll('*').forEach(el => {
    const style = getComputedStyle(el);
    if (style.color) tokens.color = style.color;
    if (style.backgroundColor) tokens.bg = style.backgroundColor;
    if (style.fontFamily) tokens.font = style.fontFamily;
  });
  console.log(JSON.stringify(tokens));
"
```

### Framer Template Analysis Workflow
1. `opencli browser open https://mahsoul.framer.website/`
2. `opencli browser sitemap` → get all 52 URLs
3. For each page type: `opencli browser open <url>` → `opencli browser extract <selector> --html --css`
4. Extract design tokens from computed styles
4. Map Framer components → Mahsoul Blade partials