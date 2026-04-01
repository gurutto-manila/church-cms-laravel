#!/usr/bin/env python3
import os
import re

# Base directory for controllers
base_dir = "/Users/karthick/Code/church-cms-laravel/app/Http/Controllers"

# Mapping of controller names to descriptions
controller_descriptions = {
    # API Controllers
    "ApkController": "Manages APK file download and mobile app distribution.",
    "BulletinsController": "Provides bulletin content delivery via API for mobile/web consumption.",
    "ChurchController": "Provides church information and details via API.",
    "ChurchDetailsController": "Delivers church metadata and organizational information via API.",
    "ContactController": "Handles contact form submissions and inquiries via API.",
    "EventGalleryController": "Delivers event-specific photo galleries via API.",
    "EventsController": "Provides event listings and detailed event information via API.",
    "FavoritesController": "Manages user favorite items (sermons, posts, events) via API.",
    "FeedbackController": "Collects user feedback and support requests via API.",
    "FundController": "Provides donation and fundraising information via API.",
    "GalleryController": "Delivers gallery and photo content via API.",
    "GroupsController": "Provides group listings and group information via API.",
    "HelpsController": "Delivers help/support content via API.",
    "LoginController": "Handles user authentication and login via API.",
    "MediaFilesController": "Delivers media files and documents via API.",
    "PhotosController": "Provides individual photo delivery and photo metadata via API.",
    "PrayerRequestsController": "Provides prayer request listings and submission via API.",
    "PrayerResponsesController": "Handles prayer responses and prayer answer submissions via API.",
    "QuotesController": "Delivers daily quotes and verses via API.",
    "SendMessageController": "Handles message sending via API.",
    "SermonLinkController": "Provides sermon links (audio/video) via API.",
    "SermonsController": "Delivers sermon listings and detailed sermon content via API.",
    "TestController": "API testing and diagnostic endpoint.",
    "UserController": "Provides user profile and account information via API.",
    "UserprofileController": "Delivers detailed user profile data via API.",
    "VideoConferencesController": "Manages video conference access and information via API.",
    "VotesController": "Handles voting functionality (sermon votes, etc.) via API.",

    # Auth Controllers
    "EmailVerificationController": "Handles email verification process during authentication.",
    "ForgotPasswordController": "Manages password recovery and reset requests.",
    "ImpersonateController": "Handles admin user impersonation for support/debugging.",
    "LoginController": "Manages user authentication and login flow.",
    "RegisterController": "Handles user registration and account creation.",
    "ResetPasswordController": "Processes password reset and token validation.",
    "VerificationController": "Handles user email verification and account confirmation.",

    # Guest Controllers
    "GalleryController": "Delivers gallery and photo content to public visitors.",
    "BulletinsController": "Provides bulletin content to public website visitors.",
    "ChurchDetailsController": "Delivers church information to public website.",
    "ContactController": "Handles contact form submissions from public website.",
    "EventsController": "Provides event listings to public website.",
    "FeedbackController": "Collects feedback from public website visitors.",
    "FundController": "Provides donation information to public website.",
    "GroupsController": "Delivers group information to public website.",
    "HelpsController": "Delivers help content to public website.",
    "LoginController": "Handles public user login.",
    "MediaFilesController": "Delivers media content to public website.",
    "PrayerRequestsController": "Handles prayer request submissions from public.",
    "QuotesController": "Delivers daily quotes to public website.",
    "SermonsController": "Provides sermon listings to public website.",

    # Angular Controllers (API endpoints for frontend)
    "WidgetsController": "Provides widget data for dashboard frontend.",

    # Member/Preacher Controllers
    "HomeController": "Displays member/preacher dashboard and overview.",
    "VideoConferencesController": "Manages video conference participation.",
    "DashboardController": "Displays preacher dashboard and analytics.",
    "ActivityLogController": "Shows activity history for analytics.",
    "NotificationController": "Manages notifications for preachers.",
    "PreacherController": "Manages preacher profile and information.",
    "SermonLinkController": "Manages preacher sermon links.",
    "SermonsController": "Manages preacher sermons.",

    # Root Controllers
    "AboutController": "Displays about page content.",
    "ChangePasswordController": "Handles user password change requests.",
    "ContactController": "Manages contact inquiries.",
    "Controller": "Base controller for all application controllers.",
    "FaqController": "Displays FAQ content.",
    "HomeController": "Displays application home page.",
    "PageController": "Displays static content pages.",
    "PricingController": "Displays pricing and plan information.",
    "TestController": "Testing and diagnostic endpoints.",

    # EmailBlaster Controllers
    "MailsDeliveredController": "Manages email delivery status and logs.",
    "RulesController": "Manages email campaign rules and conditions.",
    "WebhooksController": "Handles external webhook events for email services.",

    # Setting Controllers
    "GeneralController": "Manages general application settings.",
    "MaintenanceController": "Manages maintenance mode and server settings.",
    "SeoDetailController": "Manages SEO configuration and metadata.",

    # Siteadmin Controllers
    "SiteadminController": "Site-wide administrative functions.",
    "DashboardController": "Site-admin dashboard.",
    "ActivityLogController": "Site-wide activity logging.",
    "ContactController": "Site-wide contact management.",
    "NotificationController": "Site-wide notifications.",

    # PayAccount (typo fix)
    "PayaccountContorller": "Manages payment account information and payment methods.",
}

# Type Mapping for common traits/patterns
trait_descriptions = {
    "LogActivity": "for audit logging",
    "Common": "for helper functions",
    "RegisterUser": "for user registration logic",
    "MemberProcess": "for member processing",
    "EventProcess": "for event-related processing",
    "SendPushNotification": "for sending push notifications",
}

def extract_class_name(content):
    """Extract class name from PHP file."""
    match = re.search(r'class\s+(\w+)\s*extends', content)
    if match:
        return match.group(1)
    return None

def has_class_phpdoc(content):
    """Check if file has class-level PHPDoc."""
    # Look for /** ... */ pattern immediately before class declaration
    pattern = r'\/\*\*.*?\*\/\s*class\s+\w+\s*extends'
    return bool(re.search(pattern, content, re.DOTALL))

def extract_traits(content):
    """Extract trait names from class."""
    traits = []
    pattern = r'use\s+(\w+)[,;]'
    for match in re.finditer(pattern, content):
        traits.append(match.group(1))
    return traits

def generate_phpdoc(class_name, description, traits, namespace):
    """Generate PHPDoc for the controller."""
    uses_line = ""
    for trait in traits:
        if trait in trait_descriptions:
            uses_line += f"\n * @uses {trait} Trait {trait_descriptions[trait]}"

    phpdoc = f'''/**
 * {class_name}
 *
 * {description}
 *
 * @package {namespace}{uses_line}
 */'''
    return phpdoc

def process_files():
    """Recursively process all controller files."""
    changes_made = 0
    skipped = 0

    for root, dirs, files in os.walk(base_dir):
        for file in files:
            if file.endswith('.php') and file != 'Controller.php':  # Skip base Controller
                filepath = os.path.join(root, file)

                try:
                    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
                        content = f.read()

                    if has_class_phpdoc(content):
                        skipped += 1
                        continue

                    # Extract metadata
                    class_name = extract_class_name(content)
                    if not class_name:
                        continue

                    # Get description from mapping or generate default
                    description = controller_descriptions.get(
                        class_name,
                        f"Manages {class_name.replace('Controller', '').lower()} operations and functionality."
                    )

                    # Extract namespace
                    namespace_match = re.search(r'namespace\s+([^;]+);', content)
                    namespace = namespace_match.group(1) if namespace_match else "App\\Http\\Controllers"

                    # Extract traits
                    traits = extract_traits(content)

                    # Generate PHPDoc
                    phpdoc = generate_phpdoc(class_name, description, traits, namespace)

                    # Insert PHPDoc before class declaration
                    new_content = re.sub(
                        r'(^.*?use\s+\w+.*?;)\s*(class\s+\w+\s*extends)',
                        r'\1\n\n' + phpdoc + r'\nclass ' + class_name + r' extends',
                        content,
                        count=1,
                        flags=re.DOTALL
                    )

                    # Only write if content actually changed
                    if new_content != content:
                        with open(filepath, 'w', encoding='utf-8') as f:
                            f.write(new_content)
                        changes_made += 1
                        print(f"✓ Updated: {filepath}")
                    else:
                        print(f"⚠ No changes: {filepath}")

                except Exception as e:
                    print(f"✗ Error processing {filepath}: {str(e)}")

    print(f"\n\nSummary:")
    print(f"Files updated: {changes_made}")
    print(f"Files skipped (already have PHPDoc): {skipped}")

if __name__ == "__main__":
    process_files()
