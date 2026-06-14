const puppeteer = require('puppeteer');

(async () => {
  const browser = await puppeteer.launch({ args: ['--no-sandbox'] });
  const page = await browser.newPage();
  
  // Set to mobile viewport
  await page.setViewport({ width: 414, height: 896 });
  
  await page.goto('http://127.0.0.1:8001');
  
  // Wait for the button
  await page.waitForSelector('#mobile-menu-btn');
  
  // Take screenshot before click
  await page.screenshot({path: 'before_click.png'});
  
  // Click it
  await page.click('#mobile-menu-btn');
  
  // Wait a bit for animation
  await new Promise(r => setTimeout(r, 500));
  
  // Take screenshot after click
  await page.screenshot({path: 'after_click.png'});
  
  // Check if it's visible
  const drawerClasses = await page.$eval('#mobile-drawer', el => el.className);
  console.log('Drawer classes:', drawerClasses);
  
  await browser.close();
})();
