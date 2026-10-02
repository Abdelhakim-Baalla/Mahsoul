---
name: opencli-usage
description: Quick reference for OpenCLI commands and sites
---

## OpenCLI Quick Reference

### Core Concepts
OpenCLI turns websites into a uniform `opencli <site> <command>` surface.
Three pillars: Adapter commands, Browser driving, Current-tab binding.

### Universal Flags
- `--profile <name>` - Use specific Chrome profile
- `--format json|csv|text` - Output format
- `--timeout <ms>` - Request timeout
- `-v, --verbose` - Verbose output

### Site Commands Pattern
```
opencli <site> <command> [args...] [flags...]
```

### Built-in Sites
- `github` - GitHub operations (issues, PRs, repos)
- `twitter` / `x` - Twitter/X operations
- `reddit` - Reddit operations
- `hackernews` - HackerNews operations
- `linear` - Linear issue tracker

### Browser Commands (Universal)
```bash
opencli browser open <url>           # Navigate to URL
opencli browser state                # Get page state (DOM, cookies, etc.)
opencli browser extract <selector> [--html] [--css] [--text] [--attribute <attr>]
opencli browser click <selector>
opencli browser type <selector> <text>
opencli browser select <selector> <value>
opencli browser scroll <x> <y>
opencli browser screenshot [--full-page]
opencli browser evaluate <js-code>  # Execute JS in page context
opencli browser wait <selector> [--timeout]
opencli browser wait-for-network-idle
opencli browser pdf [--path]
opencli browser bind                 # Bind to current tab
opencli browser unbind
```

### Sitemap Operations
```bash
opencli browser sitemap <url>              # Extract sitemap
opencli browser extract "a[href]" --attr href  # Extract all links
opencli browser extract ".product-card" --html --css  # Extract component
```

### Design Token Extraction
```bash
opencli browser evaluate "
  const tokens = { colors: {}, fonts: {}, spacing: {} };
  document.querySelectorAll('*').forEach(el => {
    const s = getComputedStyle(el);
    if (s.color && !tokens.colors[s.color]) tokens.colors[s.color] = true;
    if (s.backgroundColor && !tokens.colors[s.backgroundColor]) tokens.colors[s.backgroundColor] = true;
    if (s.fontFamily && !tokens.fonts[s.fontFamily]) tokens.fonts[s.fontFamily] = true;
  });
  console.log(JSON.stringify(tokens, null, 2));
"
```

### Framer Template Analysis Workflow
1. `opencli browser open https://mahsoul.framer.website/`
2. `opencli browser sitemap` → get all 52 URLs
3. For each page type: `opencli browser open <url>` → `opencli browser extract <selector> --html --css`
4. Extract design tokens from computed styles
4. Map Framer components → Mahsoul Blade partials