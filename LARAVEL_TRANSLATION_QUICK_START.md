# Laravel Translation System - Quick Reference

## ✅ Implementation Complete!

Your application now uses Laravel as the single source of truth for all translations.

## 🎯 Quick Usage

### Frontend (React)

```tsx
import { useLanguage } from "@/contexts/language-context";

function MyComponent() {
    const { locale, setLocale, t, trans } = useLanguage();
    
    return (
        <>
            {/* Laravel translation */}
            <h1>{t("Welcome")}</h1>
            
            {/* With replacements */}
            <p>{t("Hello :name", { name: "John" })}</p>
            
            {/* Inline translation (fallback) */}
            <span>{trans({ id: "Hai", en: "Hi" })}</span>
            
            {/* Change language */}
            <button onClick={() => setLocale("en")}>English</button>
            <button onClick={() => setLocale("id")}>Indonesian</button>
        </>
    );
}
```

### Backend (Laravel)

**Add translations to `lang/en.json` and `lang/id.json`:**

```json
// lang/en.json
{
    "Welcome": "Welcome",
    "Hello :name": "Hello :name"
}

// lang/id.json
{
    "Welcome": "Selamat Datang",
    "Hello :name": "Halo :name"
}
```

## 🔧 What Was Implemented

### Backend Files Created/Modified:

1. ✅ **`app/Http/Middleware/SetLocale.php`** - Sets locale from session
2. ✅ **`app/Http/Middleware/HandleInertiaRequests.php`** - Shares translations with frontend
3. ✅ **`bootstrap/app.php`** - Registered SetLocale middleware
4. ✅ **`routes/web.php`** - Added language switching route
5. ✅ **`lang/en.json`** - Added application translations
6. ✅ **`lang/id.json`** - Added Indonesian translations

### Frontend Files Modified:

1. ✅ **`resources/js/contexts/language-context.tsx`** - Updated to use Laravel translations
2. ✅ **`resources/js/components/navbar.tsx`** - Uses t() function
3. ✅ **`resources/js/components/language-toggle.tsx`** - Uses Laravel translations
4. ✅ **`resources/js/pages/index.tsx`** - Fully translated with Laravel

## 📖 API Reference

### `useLanguage()` Hook

```tsx
const { locale, setLocale, t, trans } = useLanguage();
```

- **`locale`**: `"id" | "en"` - Current language
- **`setLocale(locale)`**: Change language (syncs with Laravel)
- **`t(key, replacements?)`**: Get Laravel translation
- **`trans(translations)`**: Inline translation helper

### Examples

```tsx
// Simple translation
t("Save")

// With placeholders
t("Welcome :name, you have :count items", { name: "John", count: 5 })

// Inline (no Laravel key)
trans({ id: "Simpan", en: "Save" })
```

## 🚀 How Language Switching Works

1. User clicks language toggle
2. `setLocale("en")` called
3. Saves to localStorage
4. Redirects to `/language/en?redirect=/current-path`
5. Laravel updates session
6. Redirects back with new locale
7. Page reloads with translations in new language

## 📝 Adding New Translations

1. **Edit Laravel files:**
   ```bash
   # Edit lang/en.json
   # Edit lang/id.json
   ```

2. **Add your translations:**
   ```json
   {
       "My New Key": "My Translation"
   }
   ```

3. **Use in React:**
   ```tsx
   {t("My New Key")}
   ```

4. **Clear cache if needed:**
   ```bash
   php artisan cache:clear
   ```

## 🎓 Model Translations

For Spatie translatable models, use the `getTranslation` utility:

```tsx
import { getTranslation } from "@/lib/translation";

// Model with translatable fields
{getTranslation(publication.title, locale)}
```

## ✨ Benefits

- ✅ Centralized translation management in Laravel
- ✅ Session + localStorage persistence
- ✅ Type-safe with TypeScript
- ✅ Easy to maintain and scale
- ✅ Single source of truth
- ✅ Works with Spatie HasTranslations

## 🐛 Troubleshooting

**Translations not showing:**
```bash
php artisan cache:clear
# Then hard refresh browser (Ctrl+Shift+R)
```

**Language not switching:**
- Check session is configured
- Verify route exists: `/language/{locale}`
- Check middleware is registered

**TypeScript errors:**
- Make sure you're using `t("key")` not `t({id: "", en: ""})`
- The old inline syntax is now `trans({id: "", en: ""})`

## 📚 More Information

See `LARAVEL_TRANSLATION_GUIDE.md` for complete documentation including:
- Detailed API reference
- Advanced usage patterns  
- Best practices
- Performance tips
- Model translation examples
