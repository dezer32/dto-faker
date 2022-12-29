<?php

declare(strict_types=1);

namespace Dezer32\Libraries\Dto\Faker\Helpers;

interface FakerMethod
{
    public const CITY_SUFFIX = 'citySuffix';

    public const STREET_SUFFIX = 'streetSuffix';

    public const BUILDING_NUMBER = 'buildingNumber';

    public const CITY = 'city';

    public const STREET_NAME = 'streetName';

    public const STREET_ADDRESS = 'streetAddress';

    public const POSTCODE = 'postcode';

    public const ADDRESS = 'address';

    public const COUNTRY = 'country';

    public const LATITUDE = 'latitude';

    public const LONGITUDE = 'longitude';

    public const LOCAL_COORDINATES = 'localCoordinates';

    public const RANDOM_DIGIT_NOT_NULL = 'randomDigitNotNull';

    public const PASSTHROUGH = 'passthrough';

    public const RANDOM_LETTER = 'randomLetter';

    public const RANDOM_ASCII = 'randomAscii';

    public const RANDOM_ELEMENTS = 'randomElements';

    public const RANDOM_ELEMENT = 'randomElement';

    public const RANDOM_KEY = 'randomKey';

    public const SHUFFLE = 'shuffle';

    public const SHUFFLE_ARRAY = 'shuffleArray';

    public const SHUFFLE_STRING = 'shuffleString';

    public const NUMERIFY = 'numerify';

    public const LEXIFY = 'lexify';

    public const BOTHIFY = 'bothify';

    public const ASCIIFY = 'asciify';

    public const REGEXIFY = 'regexify';

    public const TO_LOWER = 'toLower';

    public const TO_UPPER = 'toUpper';

    public const BIASED_NUMBER_BETWEEN = 'biasedNumberBetween';

    public const HEX_COLOR = 'hexColor';

    public const SAFE_HEX_COLOR = 'safeHexColor';

    public const RGB_COLOR_AS_ARRAY = 'rgbColorAsArray';

    public const RGB_COLOR = 'rgbColor';

    public const RGB_CSS_COLOR = 'rgbCssColor';

    public const RGBA_CSS_COLOR = 'rgbaCssColor';

    public const SAFE_COLOR_NAME = 'safeColorName';

    public const COLOR_NAME = 'colorName';

    public const HSL_COLOR = 'hslColor';

    public const HSL_COLOR_AS_ARRAY = 'hslColorAsArray';

    public const COMPANY = 'company';

    public const COMPANY_SUFFIX = 'companySuffix';

    public const JOB_TITLE = 'jobTitle';

    public const UNIX_TIME = 'unixTime';

    public const DATE_TIME = 'dateTime';

    public const DATE_TIME_AD = 'dateTimeAD';

    public const ISO8601 = 'iso8601';

    public const DATE = 'date';

    public const TIME = 'time';

    public const DATE_TIME_BETWEEN = 'dateTimeBetween';

    public const DATE_TIME_IN_INTERVAL = 'dateTimeInInterval';

    public const DATE_TIME_THIS_CENTURY = 'dateTimeThisCentury';

    public const DATE_TIME_THIS_DECADE = 'dateTimeThisDecade';

    public const DATE_TIME_THIS_YEAR = 'dateTimeThisYear';

    public const DATE_TIME_THIS_MONTH = 'dateTimeThisMonth';

    public const AM_PM = 'amPm';

    public const DAY_OF_MONTH = 'dayOfMonth';

    public const DAY_OF_WEEK = 'dayOfWeek';

    public const MONTH = 'month';

    public const MONTH_NAME = 'monthName';

    public const YEAR = 'year';

    public const CENTURY = 'century';

    public const TIMEZONE = 'timezone';

    public const SET_DEFAULT_TIMEZONE = 'setDefaultTimezone';

    public const GET_DEFAULT_TIMEZONE = 'getDefaultTimezone';

    public const FILE = 'file';

    public const RANDOM_HTML = 'randomHtml';

    public const IMAGE_URL = 'imageUrl';

    public const IMAGE = 'image';

    public const EMAIL = 'email';

    public const SAFE_EMAIL = 'safeEmail';

    public const FREE_EMAIL = 'freeEmail';

    public const COMPANY_EMAIL = 'companyEmail';

    public const FREE_EMAIL_DOMAIN = 'freeEmailDomain';

    public const SAFE_EMAIL_DOMAIN = 'safeEmailDomain';

    public const USER_NAME = 'userName';

    public const PASSWORD = 'password';

    public const DOMAIN_NAME = 'domainName';

    public const DOMAIN_WORD = 'domainWord';

    public const TLD = 'tld';

    public const URL = 'url';

    public const SLUG = 'slug';

    public const IPV4 = 'ipv4';

    public const IPV6 = 'ipv6';

    public const LOCAL_IPV4 = 'localIpv4';

    public const MAC_ADDRESS = 'macAddress';

    public const WORD = 'word';

    public const WORDS = 'words';

    public const SENTENCE = 'sentence';

    public const SENTENCES = 'sentences';

    public const PARAGRAPH = 'paragraph';

    public const PARAGRAPHS = 'paragraphs';

    public const TEXT = 'text';

    public const BOOLEAN = 'boolean';

    public const MD5 = 'md5';

    public const SHA1 = 'sha1';

    public const SHA256 = 'sha256';

    public const LOCALE = 'locale';

    public const COUNTRY_CODE = 'countryCode';

    public const COUNTRY_ISOAlpha3 = 'countryISOAlpha3';

    public const LANGUAGE_CODE = 'languageCode';

    public const CURRENCY_CODE = 'currencyCode';

    public const EMOJI = 'emoji';

    public const CREDIT_CARD_TYPE = 'creditCardType';

    public const CREDIT_CARD_NUMBER = 'creditCardNumber';

    public const CREDIT_CARD_EXPIRATION_DATE = 'creditCardExpirationDate';

    public const CREDIT_CARD_EXPIRATION_DATE_STRING = 'creditCardExpirationDateString';

    public const CREDIT_CARD_DETAILS = 'creditCardDetails';

    public const IBAN = 'iban';

    public const SWIFT_BIC_NUMBER = 'swiftBicNumber';

    public const NAME = 'name';

    public const FIRST_NAME = 'firstName';

    public const FIRST_NAME_MALE = 'firstNameMale';

    public const FIRST_NAME_FEMALE = 'firstNameFemale';

    public const LAST_NAME = 'lastName';

    public const TITLE = 'title';

    public const TITLE_MALE = 'titleMale';

    public const TITLE_FEMALE = 'titleFemale';

    public const PHONE_NUMBER = 'phoneNumber';

    public const E164_PHONE_NUMBER = 'e164PhoneNumber';

    public const IMEI = 'imei';

    public const REAL_TEXT = 'realText';

    public const REAL_TEXT_BETWEEN = 'realTextBetween';

    public const MAC_PROCESSOR = 'macProcessor';

    public const LINUX_PROCESSOR = 'linuxProcessor';

    public const USER_AGENT = 'userAgent';

    public const CHROME = 'chrome';

    public const MSEDGE = 'msedge';

    public const FIREFOX = 'firefox';

    public const SAFARI = 'safari';

    public const OPERA = 'opera';

    public const INTERNET_EXPLORER = 'internetExplorer';

    public const WINDOWS_PLATFORM_TOKEN = 'windowsPlatformToken';

    public const MAC_PLATFORM_TOKEN = 'macPlatformToken';

    public const IOS_MOBILE_TOKEN = 'iosMobileToken';

    public const LINUX_PLATFORM_TOKEN = 'linuxPlatformToken';

    public const UUID = 'uuid';

    public const MIME_TYPE = 'mimeType';

    public const FILE_EXTENSION = 'fileExtension';

    public const FILE_PATH = 'filePath';

    public const BLOOD_TYPE = 'bloodType';

    public const BLOOD_RH = 'bloodRh';

    public const BLOOD_GROUP = 'bloodGroup';

    public const EAN_13 = 'ean13';

    public const EAN_8 = 'ean8';

    public const ISBN_10 = 'isbn10';

    public const ISBN_13 = 'isbn13';

    public const NUMBER_BETWEEN = 'numberBetween';

    public const RANDOM_DIGIT = 'randomDigit';

    public const RANDOM_DIGIT_NOT = 'randomDigitNot';

    public const RANDOM_DIGIT_NOT_ZERO = 'randomDigitNotZero';

    public const RANDOM_FLOAT = 'randomFloat';

    public const RANDOM_NUMBER = 'randomNumber';

    public const SEMVER = 'semver';
}