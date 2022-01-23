-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2022 at 03:45 AM
-- Server version: 5.7.36-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brokersbazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutUs`
--

CREATE TABLE `aboutUs` (
  `id` int(255) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(211) NOT NULL,
  `Menu` varchar(211) NOT NULL,
  `page` enum('Home_page','Vendor_page','User_page') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Menu`, `page`) VALUES
(1, 'About Us', 'Home_page'),
(2, 'Services', 'Home_page'),
(3, 'Education', 'Home_page'),
(4, 'Guide For Investors', 'Home_page'),
(5, 'Support', 'Home_page'),
(6, 'Stock Brokars', 'Home_page'),
(7, 'News & Reviews', 'Home_page'),
(8, 'Loan', 'Home_page'),
(9, 'How It Works', 'Home_page');

-- --------------------------------------------------------

--
-- Table structure for table `Package`
--

CREATE TABLE `Package` (
  `id` int(222) NOT NULL,
  `pack_name` varchar(222) DEFAULT NULL,
  `pack_discription` varchar(222) DEFAULT NULL,
  `pack_price` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Package`
--

INSERT INTO `Package` (`id`, `pack_name`, `pack_discription`, `pack_price`) VALUES
(1, 'Basic', 'Allow Only 05 Leads', '0'),
(2, 'Standard', 'Allow Only 10 Leads', '50'),
(3, 'VIP', 'Allow Only 20 Leads', '100');

-- --------------------------------------------------------

--
-- Table structure for table `pageContent`
--

CREATE TABLE `pageContent` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `submenu` varchar(100) DEFAULT NULL,
  `bannerImage` varchar(100) DEFAULT NULL,
  `bannerTitle` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `text` text,
  `img1` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pageContent`
--

INSERT INTO `pageContent` (`id`, `menu`, `submenu`, `bannerImage`, `bannerTitle`, `title`, `text`, `img1`, `img2`) VALUES
(2, 'About Us', 'Vision', 'in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Vision', '\"We might boast about catching up with developed countries in the field of Science and Technology, but there\'s no denying the fact that the business and investment strategies of majority of the population date back to the medieval ages. Properties, Fixed Deposits, Jewellery - these are the only options we Indians are very well acquainted with, at least this is what the statistics reveal. But is it really that way, or we have always been ignorant of some really good options which promise much better returns than the orthodox methods most sought after.We, at Brokers Bazaar, have this vision of popularising stock market as an investment option, by reaching every nook, even corner of the country, no matter howsoever remote, for providing the necessary education about what stocks and share market are really about, and how one can generate much better earnings via investments in shares.\r\n<br><br>\r\nWe, as an organisation, prioritise delivering financial services with high standards of awareness amongst our clients in order to ensure peace of mind.\r\n<br><br>\r\nWe want to establish transparency between the client and the market, in an effort to rescue the investors from all the negative elements out there.\r\n<br><br>\r\nWe believe that greater national investments in the market will end the monopoly of foreign investors and ensure that the fruits of investment are enjoyed amongst the fellow citizens of the country only, thus strengthening the economy and raising the standards of living, thus realising \'Sab ka saath, sab ka vikaas\'. \"', 'unnamed.jpg', 'visionmission.png'),
(3, 'Services', 'Search And Compare', '21_12_29_12_42_01in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Search & Compare', 'We provide the ‘Search and Compare’ service in which anyone looking for investment ideas, plans in stock market, can have easy access to compare and search various listed companies. We do understand the essence of comparison in stock industry and how curious investors become to know how other companies are performing in the market. May the companies they are associated by are sector leader or follower; but when they know how other companies are performing in same sector, it gives them investment opportunities and ideas leading to confirmation of stocks.<br><br>\r\n\r\nOur search and compare service helps you to research some of the fundamentals and technical information about stock market. Some of the information that you can find out through our service are P/E ratio-price earnings ratio, market value per share, even if the company you want to invest in is listed on stock exchange in India, Bombay stock exchange etc.\r\n<br><br>\r\nYou can also search brokers, sub-brokers or investors based on location and types you want. Our service is just a one stop solution for all kinds of investment related queries.', '21_12_29_12_42_01Comparisopageguide.jpg', '21_12_29_12_42_01image-13.png'),
(4, 'Services', 'E-KYC', '21_12_29_12_47_57in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'E-KYC', 'E-KYC (Know Your Customer) is the electronic verifying process where the identity of the users get verified as per the regulatory norm in order to prevent financial fraud, identity theft, money laundering and terrorist financing. Earlier this KYC process used to take several days where the person needs to fill up the forms and also submit copies of address proof as well as identity proof. The process is very much part of the daily stock market dealings. Hence, in order to make it more simplified and easy, we started to serve our customers and we began to provide E-KYC service.\r\n<br><br>\r\nNow you can lead a hassle free life and with one request, your KYC compliance which is a prerequisite for any kind of investments, can be easily completed.\r\n<br><br>\r\nNote: The E-KYC will be based on your Aadhaar number.', '21_12_29_12_47_57Video-KYC-small.jpg', '21_12_29_12_47_57online-kyc-process.png'),
(5, 'Services', 'Verfication', '21_12_29_12_51_28in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Verification', 'Verification is one of the significant aspects of stock market. You may be investor or broker, yet you cannot ignore verification. However, for some it is a quite daunting task as there are so many companies in the market that attract investors. But investors sometimes go clueless and they want to verify the details of the companies prior to investment. Also if you have no time to verify, you can rely upon the company profile to do the verifying task for you.<br><br>\r\nEven we respect the independent decision you take and choice you make when it comes to choosing brokers in the market. We would help you to verify the track record of company’s performance and stance in the market. So, no matter how challenging is verification for you, relax as we have professionals whom we can engage to complete your verification process in case you find it difficult or have no time.', '21_12_29_12_51_28Verifier-passes-or-rejects-the-KYC-Application-after-verification.png', '21_12_29_12_51_28what-is-kyc-verification.jpg'),
(6, 'Services', 'Investment Ideas', '21_12_29_12_53_50in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Investment Ideas', 'Are you interested in investing in stocks?\r\n<br>\r\nHaving second thoughts?(We will use vector icon here)\r\n<br>\r\nIf that\'s the case, you have arrived at the right and relevant portal of experts and professionals !\r\n<br>\r\nPeople with surplus money may want to invest but lack investment ideas; this is the reason most people hesitate to go for investment, though they are potential investors. They are the ones who need right ideas on right time in order to enjoy financial gain either for long term or short term. In order to help them in taking right decision, we, at BrokersBazaar visualize serving them with wise, quality and concrete investment ideas.\r\n<br><br>\r\nWe have industry professionals who have immense industrial experience behind them who would love to guide potential investors based on facts and figures. The idea behind this service is to ensure that the potential investors have clear idea with facts, graphs and figures which is getting them into effective and profitable investment strategy with minimum risks in stock market. Our professionals have required set of skills and expertise over equity shares, bonds and financial industry to be precise.\r\n<br><br>\r\nSo, are you willing to invest but not sure how to go about it? If so, rush out to our experts for investment ideas and financial suggestions right now!', '21_12_29_12_53_50456.jpg', '21_12_29_12_53_50jdgXCv2d9fBDcQALSNYW.jpg'),
(7, 'Services', 'Legal and Compliances', '21_12_29_12_55_12in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Legal Compliances', 'Comming soon...', '21_12_29_12_55_12istockphoto-1221240925-612x612.jpg', '21_12_29_12_55_12coming-soon5.png'),
(8, 'Services', 'Services', '21_12_29_01_01_16', '', 'Services', '\r\nWe provide you with the services to match all your requirements, a solution to your every problem . We make sure that you save your precious time and effort with us and get access to our customers friendly services.', NULL, '21_12_29_01_01_16'),
(9, 'Education', 'Stock Market', '21_12_29_01_08_22', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Stock Market', 'Comming soon...', NULL, '21_12_29_01_08_22'),
(10, 'Education', 'Compliance', '21_12_29_01_11_54', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Compliance', 'Are you willing to be part of a booming stock industry? If yes, boost up your career by opting compliance as your subject and get specialized into it. The complicated laws, regulations, protocols and permits in the stock sector have always been something that is beyond the understanding of a common man. It brought out a new scope for people willing to build careers in compliance as officers.\r\n\r\nThe main responsibility of compliance officer is to ensure companies and other governing bodies dwell in line with internal policies and under regulatory requirement. There is a higher demand of such officers in the market today with the introduction of enforcement of anti-money laundering laws by the Government.\r\n<br><br>\r\n<b>How to be a compliance officer?</b>\r\n<br><br>\r\nCandidates desiring to be compliance officers need to have certification from National Institute of Securities Markets (NISM) right after passing their relevant examinations as per the guidelines or instructions given by Securities exchange board of India (SEBI).', '21_12_29_01_11_54Rules and Regulations [Converted].png', '21_12_29_01_11_54'),
(12, 'Education', 'Research', '21_12_29_01_15_45in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Research', 'Looking for more in details about a career in Research? Research is the study of stocks or equities with the purpose of investment. The researchers function in the same way as equity research analyst. In nutshell, the equity research is all about collecting or gathering information for the following purposes.<br>\r\n• Information that assists the investors in deciding where to invest their money.<br>\r\n• Information which is needed by traders to have clear understanding of market position.<br>\r\n• Information that financiers like bankers or any other firms require observing or evaluating the companies. One of the major responsible functions of the researcher is to give a detailed analysis of the company so that investors can make an informed decision with greater ease.\r\n<br><br>\r\nThe report given by researchers is often used by many private equity firms and investment banks for evaluating the company for many purposes such as LBO (Leveraged buyout), IPO (Initial Public Offering) mergers etc. How to build a career in research? For any candidate who wants to build a career in research, a degree in MBA, CFA or CA is mandatory. Candidates have to start as equity research associates initially while building a career in equity research and then they further move on to be analyst. However, candidates who work or intern with the reputed investment or financial companies while pursuing the course is always an added advantage. If you want to pursue a career in research but have no idea how to go about it, you can easily rely on our experienced staffs who would be happy to guide you all through.', '21_12_29_01_15_45Types-of-Research-Design.jpg', '21_12_29_01_15_45'),
(13, 'Guide For Investors', 'Guide For Investors', '21_12_29_01_19_30in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Guide For Investors', 'Investments are always a tough decision to take. Where to invest, how to invest, what are one\'s rights and obligations as an investor and much more. We help you take this step by providing you a guide for investment, to get you acquainted with the market.', '21_12_29_01_19_307634dd93-fd6b-e711-8118-e0071b6a82f1.jpg', '21_12_29_01_19_30'),
(14, 'Guide For Investors', 'How To Choose Your Service Provider', '21_12_29_01_20_59in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'How To Choose Your Service Provider', 'Comming soon...', '21_12_29_01_20_59istockphoto-1221240925-612x612.jpg', '21_12_29_01_20_59'),
(15, 'Guide For Investors', 'Investment FAQ', '21_12_29_01_21_24in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Investment FAQ', '\r\nComming soon...', '21_12_29_01_21_24istockphoto-1221240925-612x612.jpg', '21_12_29_01_21_24'),
(16, 'Support', 'How to Compare', '21_12_29_01_22_16in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'How to Compare?', '\r\nComming soon...', '21_12_29_01_22_16istockphoto-1221240925-612x612.jpg', '21_12_29_01_22_16'),
(17, 'Stock Brokars', 'Stock Brokars', '21_12_29_01_24_37in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Stock Brokars', '\r\nBroker is an intermediary between the investors and the stock exchange.His job involves selling stocks to the investors through stock exchange.', '21_12_29_01_24_37GettyImages-485990146-820ba3a792ab4291bcc5f147da9bb94f.jpg', '21_12_29_01_24_37'),
(18, 'Support', 'Support', '21_12_29_01_28_43in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Support', '\r\n\" Resolving your queries for ensuring you peace of mind is our utmost priority, so get your questions and doubts answered at : (email ids) \"', '21_12_29_01_28_43support_gross.png', '21_12_29_01_28_43'),
(19, 'News & Reviews', 'News and Reviews', '21_12_29_01_35_23in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'News', '\r\nComming soon...', '21_12_29_01_35_23istockphoto-1221240925-612x612.jpg', '21_12_29_01_35_23'),
(20, 'How It Works', 'How It Works', '21_12_29_01_40_17in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'How It Works', 'Well, this is how we roll:\r\n<br><br>\r\nNeed suggestions for diversifying your investment options, come and ask your questions here and get to know what experts have to say. Develop a broader and open mindset towards the market. Stay updated with the latest government policies and amendments as we provide you insightful blogs on the same.\r\n<br><br>\r\nWe never provide a biased opinion, neither do we influence you to make a particular decision. We just enlighten you and leave it to your wise to choose what would suit you the best.\r\n<br><br>\r\n<b>Want a loan, but without wasting time and effort?</b>\r\n<br><br>\r\nCome,and all you need to do is just click on the type of loan you want and choose amongst all available options. Several affiliated banks and they interest rates they charge right in front of you. Save your time and efforts you would\'ve wasted in getting all rates of interest and concerned documents.\r\n<br><br>\r\nThrough the use of e-KYC, we free you from carrying a hard copy of documents all the time. Your Aadhaar card is all what is required to get things done.\r\n<br><br>\r\n<b>Get educated</b>\r\n<br><br>\r\nKnowledge is the key. Doesn\'t matter if you are an investor or a broker or just anyone looking to start afresh in the financial market, come to us and get informed. We provide you with useful information, and even make the best educational institutions for coaching available at your fingertips.\r\n<br><br>\r\n<b>Search/Compare Broker</b>\r\n<br><br>\r\nWant to search for a broker, be it near you or the one with the best services, get it done here. Research is always essential, especially when we are investing our hard earned money, in which we will help you till you you are able to decide what you are actually looking for. Don\'t follow anyone\'s advise.Compare and choose on the basis of thousands of honest reviews given by clients like you only. Use our smart search tools for it. Comparison and Research is what it will take for you to know what will actually benefit you. Take help of search filters such as location, services etc so that you can search and choose as per your convenience. Follow a strict policy of not blindly following anyone, but your knowledge and what solid facts you get to know.\r\n<br><br>\r\nWe suggest you to never be complacent about anything you hear from someone or read somewhere. Try to go till the very depth only this attitude of yours will help you avoid frauds/losses, and we help you develop such outlook.\r\n<br><br>\r\nWe make sure that the time you spend seeking answers with us is worthwhile.\r\n<br><br>\r\nOn your way to Stock markets and finance,We are your trustworthy companions,always with your honest customer reviews and ratings.\r\n<br><br>\r\nSelect your preferences, as we provide you with search filters such as location, services etc so that you can search and choose as per your convenience.\r\n<br><br>\r\nWe make sure that the time you spend with us seking answers is worthwhile.On your way to Stock market ,we are your trustworthy companions,always with you.', '21_12_29_01_40_17unnamed (1).jpg', '21_12_29_01_40_17how-it-works-promo.jpeg'),
(21, 'Loan', 'Loan', '21_12_29_01_44_35in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Loan', '\r\nFinancially, a loan is a sum of money lend to an organisation or a group of individuals or an individual by a financial institution ( such as cooperatives, banks), or any other organisation/ individual(s) at an interest rate.\r\n<br><br>\r\nIt generally involves legal documents specifying the principal amount, time span for which loan is issued, rate of interest, mortgage ( in some cases ) and some other details of relevance.\r\n<br><br>\r\nBroadly categorising, Loans can be secured or unsecured.\r\n<br>\r\n<b>Secured loans :</b> In these loans, generally some asset (collateral) is presented by the borrower as a guarantee to repay the loan in time. If unable to do so, the organisation / institution is entitled to carry out necessary actions and if required, even confiscate the collateral.\r\n<br><br>\r\n<b>Unsecured loans :</b> For getting these loans, a borrower need not put forward any assets as a guarantee for repaying the loan, however, the institutions lending such loans generally charge a higher rate of interest in comparison with secured loans.', '21_12_29_01_44_35981145-699899-loanpersonal-thinkstock-070218.jpg', '21_12_29_01_44_35610a313b9a90a_1366x414-174.webp'),
(22, 'Loan', 'Business Loan', '21_12_29_01_46_16in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors. ', 'Business Loan', 'Expansion of businesses require capital, sometimes large enough to be met by company\'s or individual\'s current profits. Therefore, organisations /individual(s) require business loans for investing in new ventures or for the upgradation of existing projects.', '21_12_29_01_46_16business-loan-500x500.jpg', NULL),
(23, 'Loan', 'Education Loan', '21_12_29_01_49_22in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', ' Education Loan', '\r\nNowadays, many enthusiastic students wish to seek higher education, even from countries abroad, which is very expensive and sometimes a heavy blow to their guardians\' pockets.\r\n<br><br>\r\nEducation loans help students pay fees for their post-secondary education, living expenses and other required supplies.\r\n<br><br>\r\nThese loans are generally different from other types of loans in terms of the interest rates and period of repayment.\r\n<br><br>\r\nThey usually have lower rates of interest and the schedule for repayment differs as one starts paying it after s/he starts earning after completing their education.', '21_12_29_01_49_22bank-education-loan.jpg', '21_12_29_01_49_22images.jpg'),
(24, 'Loan', 'Loan Against Property', '21_12_29_01_50_45in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', ' Loan Against Property', '\r\nProperty is a person\'s one of the most valued possessions. In loan against property, one uses their existing property as a security for financing loan for required purpose, say for medical expenses, education, marriage etc.', '21_12_29_01_50_45Home-Loan-vs-Loan-Against-Property.jpg', '21_12_29_01_50_45'),
(25, 'Loan', 'Loan Against Securities', '21_12_29_01_51_43in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors. ', 'Loan Against Securities', '\r\nIt is one of the very best ways to raise funds at the time of need. In this type, one can get a loan financed from a bank with mutual funds, fixed deposits or shares as security. The great benefit they offer is that one need not sell their assets for raising funds, and one gets his/her security (Fixed deposits, mutual funds, shares etc) back on repayment of loan.', '21_12_29_01_51_43Home-Loan-vs-Loan-Against-Property.jpg', '21_12_29_01_51_43'),
(26, 'Loan', 'Personal Loan', '21_12_29_01_52_52', 'We have something for everyone, be it Brokers, Authorised Person or investors. ', 'Personal Loan', '\r\nA personal loan is a consumer loan, which one can use for a variety of personal reasons including medical reasons, family affairs ( marriages, education), repair and maintenance of house/ property etc.\r\n<br><br>\r\nThey are generally unsecured, and are financed keeping in view the credit history and current financial conditions (present income) of the borrower.', '21_12_29_01_52_52Finance-Guru-Personal-Loan.webp', '21_12_29_01_52_52'),
(27, 'Loan', 'Housing Loan', '21_12_29_01_53_58in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors. ', 'Housing Loan', '\r\nAlmost everyone wishes to live in a house of his/her own. To realise such aspirations, several financial institutions provide housing loans to aid the customers buy the home they wish to,but the amount issued is generally influenced by either the collateral or the present financial conditions and credit history or both.', '21_12_29_01_53_58home-loan-mob.jpg', '21_12_29_01_53_58'),
(28, 'Loan', 'SME Loan', '21_12_29_01_57_09', 'We have something for everyone, be it Brokers, Authorised Person or investors. ', 'What are SMEs', 'SME stands for small and medium enterprises. Their definition varies from country to country based upon some factors such as number of employees, annual turnover etc.\r\n\r\nIn the last five decades, these medium and small enterprises have contributed significantly for Indian economy by providing employment opportunities in large numbers, increasing domestic production and thus the exports ,and devising indigenous tools and techniques for promoting industrialisation.\r\n<br><br>\r\n<b>SME Finance :-</b>\r\n<br><br>\r\nBudding small and medium enterprises need finance to expand and accelerate their production operations, however they might not have the security for accessing traditional collateral based loans, plus their turnover might not be high enough to attract investors.\r\n\r\nSME Finance is funding of such small and medium enterprises to help them grow in their operations. Several private finance companies and banks provide SME loans.\r\n\r\nIn India, Small and Medium enterprises Development Chamber has been working since 23 years for providing a boost to these businesses, by providing them a platform to them for connectivity, interaction with investors and finance companies, importers, exporters etc.', '21_12_29_01_57_09Finance-Guru-Personal-Loan.webp', '21_12_29_01_57_09'),
(29, 'Loan', 'Startup Loan', '21_12_29_01_59_03in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Startup Loan', '\r\nThis is the age of startups. We have seen great entrepreneurs such as Elon Musk, Steve jobs, Vijay shekhar Sharma (Paytm), Sachin Bansal and Binny Bansal (Flipkart) and many others leaving a mark with their ideas.\r\n<br><br>\r\nHowever, all these great entrepreneurs started with an idea, which always requires capital in hand to turn an idea into reality. Startup Loans help realising such business ideas and help them grow. Startup loans\r\n<br><br>\r\nA startup loan is a personal loan available to an individual who seeks to start or grow a business.\r\n<br><br>\r\nOne of the greatest advantages of a startup loan is that one need not show any assets for getting the loan, i.e., one gets a collateral - free loan.\r\n<br><br>\r\nOne most important factor while applying for the startup loan is that the person applying for the loan must be able to convince the financer that his business will be able to generate sufficient revenues to ensure timely payment of loans. It doesn\'t matter if the business succeeds or drowns, one has to repay the loan.\r\n<br><br>\r\nHowever, it must not be confused with a grant and must be paid back in full along with decided rate of interest within the time limit opted for by the person.\r\n<br><br>\r\nAlso, one cannot spend the money as he wishes to, there are certain norms to be followed, such as one cannot use it for an existing debt payment, or invest it somewhere else (any other venture which is not a part of your existing startup),etc', '21_12_29_01_59_03download.jpg', '21_12_29_01_59_03business-instalment-loan.webp'),
(30, 'Education', 'Education', '21_12_29_02_03_39in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors. ', 'Education', '<b>Need for stock markets</b>\r\n<br><br>\r\nExpansion of businesses with one\'s own profits is definitely a very difficult task. For example, setting up a new production unit costs a lot of money. If the production unit is large and has to be equipped with heavy modern machinery, this might cost millions. Now credit from bank requires a lot of documentation and time, and other sources of capital might charge a healthy interest rate.This large sum of money required for hundreds of such blooming businesses comes from the pocket of common people - hundreds and thousands of them, whom we acknowledge as \'the investors\'.\r\n<br><br>\r\n<b>Stocks :-</b> Buying shares of a company actually means owning a small portion of it. A company may declare various classes of shares, each of them having distinct value, perks and ownership rules. Proper ownership of shares of a company is documented by issuance of stock certificate. Stock Certificate is a document which specifies the amount of shares owned by an individual, type of shares and their value.\r\n<br><br>\r\n<b>Stocks exchange :-</b> This is the place where actual trade of shares takes place. Investors invest their money in companies via stock exchange. Listing Thousands of companies get themselves listed at the stock exchange, so that more and more people invest in their company (by buying their shares) . These companies are called Public Companies as their shares are owned by common public. These companies pay an amount to the stock exchange as a fee to get themselves listed, along with all the necessary information.\r\n<br><br>\r\n<b>Brokers :-</b> In the share market,Brokers get companies listed and connect them with the investors. Since there is large number of investors (in millions), stock exchange cannot deal with each of them separately, so they assign this task to the brokers. In other words, shares broker is an intermediate between you and the stock exchange.\r\n<br><br>\r\n<b>Indian Market :-</b> Presently, only 1.5% of the total population (around 18-20 million in a population of over a billion) invest a part of their earnings in stock market, much disappointing in comparison with developed economies,such as China and USA where a healthy percentage of 10% and 18% of their total population participates in stock markets.\r\n<br><br>\r\nAlso, a very insignificant portion of India\'s household savings (only 2%) makes its way into the market, again much far behind USA where on average, 45% of the total household savings are being invested in the stocks.\r\n<br><br>\r\nNow the most ironic and surprising fact, at present, as per the estimates, 70% market is dominated by the foreign investors. It\'s ironic because we as a nation are earning lesser from our markets in comparison with the outsiders, isn\'t it?\r\n<br><br>\r\nIn spite of offering some really high returns on the investments made, investing in shares is not much welcomed option in India, owing to the following reasons :\r\n<br><br>\r\ni) Hoaxes and some misleading facts about the market, most common of which being, \' Investmeting in shares might land you on road, you better watch your step\' or \'Shares are like a gamble, and you know you shouldn\'t be playing gamble with your hard earned money\'.\r\n<br><br>\r\nii) Cumbersome rules and regulations, which have the potential to upset even the smartest brains in the business, accompanied by some really stringent paperwork, which demands ample time, knowledge and patience.\r\n<br><br>\r\niii) Presence of some really mind numbing and complex set of regulations eases the way for fraudsters to trick their client within minutes like a piece of cake. These sort of mishaps are the reason we hear quite oftenly that a guy suffered this much loss in share market.\r\n<br><br>\r\nThe thing that we need to ponder about is that if losses would have been so prevelant, then there\'s no reason any person would\'ve been interested in investing his/her money, especially the foreign investors. The fact is that people are reaping great harvests upon their investments in the market, especially the foreign investors. It\'s high time that we capitalise on what our market has to offer us. Every business has its ups and downs and so does this investment in shares has, but defaming it or following what\'s heard from the others without knowing the actual scenario is injustice to our money as well as the opportunity.\r\n<br><br>\r\n<b>Why invest in stock markets?</b>\r\n<br><br>\r\ni) Best returns Time has proved this fact repeatedly that shares are one of the best long term investments, as no other option beats its potential to generate huge returns, be it property, Jewellery or bonds.\r\n<br><br>\r\nShare prices can go any way, so it always involves a risk while investing in shares. Now if you\'re looking to double you investments in quick succession, you are more likely to be disappointed, but over the long term, they generate unexpected returns. For example, back in 2001,if someone would\'ve bought a Royal Enfield bike, he is likely to have an old bike which requires a good sum on its maintenance, but if you would\'ve invested just ?55,000 buying it\'s shares, they\'d be worth a whopping 4.75 crores right now.\r\n<br><br>\r\nii) To keep pace with inflation Buying shares might seem risky, but not investing at all is not risk free either. The money we have now, over time, will eventually worth less, so we need a place to invest so that we can get good returns. However if we don\'t invest smartly, we might not be able to keep with our expenditures in near future.\r\n<br><br>\r\nSo,if you are recently introduced to the concept of investment in shares,then you are at the right place because from here,at Brokers Bazaar ,everything you want or might need is available at just a few clicks-expert suggestions,brokers near you,new investment ideas and much more.', '21_12_29_02_03_39GettyImages-1128046391-ddf51d38136c4c4a820129c6a42666c0.jpg', '21_12_29_02_03_391.jpg'),
(31, 'Education', 'Mutual Funds', '21_12_29_02_21_16in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors. ', 'Mutual Funds', '\r\nMutual funds are another means for people to invest, generally with a lesser risk and lesser returns too.\r\n<br><br>\r\nBut how are they different from stock market?\r\n<br><br>\r\nHere\'s how:\r\n<br><br>\r\nPeople from diverse backgrounds come and invest a part of their earnings in mutual funds, which in turn, results in a large capital in the hands of these Mutual Fund companies.\r\n<br><br>\r\nThese companies have a group of people, referred to as \'Fund Managers\', who are having a great experience and sound understanding of how markets behave. The Fund Managers then invest the colossal capital from mutual funds into shares and overall financial market.\r\n<br><br>\r\nThe areas where Mutual fund companies invest are very diverse, could be anything - stocks, gold, real estate, oil etc.\r\n<br><br>\r\nSome different types of mutual funds based on the duration of investment are\r\n<br><br>\r\n<b>i) Open End Mutual Funds:-</b>\r\nIn these funds, anyone can walk in anytime and invest. Same rule for withdrawal of money,i.e.,one can get in or get out anytime as per his/her wish, there\'s no specified period until which investor cannot withdraw their investment.\r\n<br><br>\r\n<b>ii) Close End Mutual Funds:-</b>\r\nIn these Mutual funds, there is a proper entry and exit time, a set duration before which investors can\'t withdraw their money.\r\n<br><br>\r\nNow based on the areas where Mutual funds invest, some general types are :\r\n<br><br>\r\n<b>i) Money Market Funds:-</b>\r\nShort term investmentd are made in fixed income securities, such as government bonds, treasury bill etc. Investments are safe in nature but give lower returns\r\n<br><br>\r\n<b>ii) Equity Funds:-</b>\r\nWhen a major portion of the capital is invested in shares, funds are called Equity Funds.\r\n<br><br>\r\n<b>iii) Debt Funds:-</b>\r\nWhen most of the investments are made in safe assets such as Government bonds, company bonds, company papers etc, funds are called Debt funds.\r\n<br><br>\r\n<b>iv) Balanced Funds:-</b>\r\nThese funds invest in both Equity funds and Debt funds in a balanced ratio, most probably 50:50 or 60:40.\r\n<br><br>\r\n<b>v) Speciality Funds:-</b>\r\nSpeciality funds invest particularly in some specific field, for example,socially responsible funds are likely to invest in products which help a person to get over tobacco addiction, or drug addiction and aren\'t likely to invest in companies manufacturing alcohol or cigarettes.\r\n<br><br>\r\nOn the basis of companies in which mutual funds invest, there are:\r\n<br><br>\r\n<b>a) Large Cap Mutual funds:-</b>\r\nLarge cap mutual funds invest a major portion of their capital in large companies. In this case, there are lesser chances of a loss as these big companies have a market for the services they provide.\r\n<br><br>\r\n<b>b) Mid cap Mutual funds:-</b>\r\nMid cap mutual funds invest mainly in companies with medium capital. Here, there are chances for greater profits as a medium company can grow more in comparison with large companies, but at the same time, chances for the loss are also higher.\r\n<br><br>\r\n<b>iii) Small Cap Mutual funds:-</b>\r\nSmall cap Mutual funds invest in small companies. Here, there are possibilities for greatest profits and losses.\r\n<br><br>\r\n<b>Benefits of Mutual Funds:-</b>\r\n<br><br>\r\n<b>i) Lesser Risk:-</b>\r\nIf all the money is invested in buying shares of a company, say ABC,then any major blow to ABC will cause whole investment to sink.\r\n<br><br>\r\nOn the other hand, if we invest in different areas, loss to one company can be compensated by the other and hence loss can be minimised. Mutual Funds follow this strategy and hence are safer.\r\n\r\n<b>ii) Lesser Complications:-</b>\r\nMutual Funds are simpler to understand in comparison with stocks, so if anyone who is not having sound knowledge about share market can start with mutual funds for better returns', '21_12_29_02_21_16Guide on How Mutual Funds Work_20200809-141343.jpg', '21_12_29_02_21_16Picture1111.png'),
(32, 'Education', 'Insurance', '21_12_29_02_38_39', 'We have something for everyone, be it Brokers, Authorised Person or investors.', ' Insurance', 'The term \' Insurance\' exists because of the word \'Risk\'.\r\n<br><br>\r\nRisk basically results from uncertainty. For example, if we are certain that we will suffer a loss if we do one particular thing, we will obviously not do it, hence there is no risk.\r\n<br><br>\r\nRisk comes into existence when there\'s uncertainty, and to minimise this risk of loss, we get our stuff insured.\r\n<br><br>\r\nInsurance is a form of risk management, or in other words, it is \' equitable transfer of risk of loss from one party (the insured) to the other (insurer) in exchange of payment, mostly periodic in nature (called premium).\r\n<br><br>\r\nHow Insurance companies work?\r\n<br><br>\r\nA question arises, why would someone pay for our loss in return for payment of a premium much smaller than the losses?\r\n<br><br>\r\nThe answer is pretty simple. An insurance company insures a large number of customers with similar insurable interest ( the one which is insured), for which all the customers pay regular premium.\r\n<br><br>\r\nNow, not all the customers encounter a loss to their insured good(s) at the same time or during the period of insurance. Therefore, the insurance companies invest the money pooled and pay for the claims, and also earn profits.\r\n<br><br>\r\n<b>TYPES OF INSURANCE</b>\r\n<br><br>\r\nAny risk that can be quantified or in other words, expressed in terms of money can be insured.\r\n<br><br>\r\nSome common types of insurance are:\r\n<br><br>\r\n<b>i) Life insurance</b>\r\n<br><br>\r\nNow one might argue how we can evaluate a person\'s life in terms of money. Well, we don\'t. We just evaluate the premium group s/he belongs, keeping in mind the health, age, financial status so that a certain sum of money is paid after a decided period of time or demise.\r\n<br><br>\r\n<b>ii) Automobile Insurance</b>\r\n<br><br>\r\n<b>iii) Property Insurance</b>\r\n<br><br>\r\n<b>iv) Health Insurance</b>\r\n<br><br>\r\n<b>v) Income protection Insurance</b>\r\n<br><br>\r\nNow it is not this way that if an insured good(s) / entity faces a loss under any circumstances, then Insurance companies are liable to pay the compensation.\r\n<br><br>\r\nInsurance companies mention the the conditions and the amount of compensation for loss under various circumstances, which must be taken care of while buying an Insurance.\r\n<br><br>\r\n<b>BENEFITS OF INSURANCE</b>\r\n<br><br>\r\n<b>Mainly, these are the reasons why we should buy insurance policies.</b>\r\n<br><br>\r\ni) Transfer of risk, as in case of life insurance, if the insured dies or becomes disabled, then the sum assured is given so that the family expenses are met. Similarly, in health insurance, we are entitled to get the expenditure on treatment of any illness upto sum assured.\r\n<br><br>\r\nii) Tax benefits are given by the government on buying insurance policies.\r\n<br><br>\r\n<b>DOs and DON\'Ts</b>\r\n<br><br>\r\nWhile buying a policy, keep these points in mind:\r\n<br><br>\r\n<b>DOs</b>\r\n<br><br>\r\n1) Always fill out your insurance form by yourself.\r\n<br><br>\r\n2)Make sure that your insurance company is registered with IRDA (Insurance Regulatory and Development Authority). At present, there are 24 Insurance companies listed in IRDA, cross examine from their official site.\r\n<br><br>\r\n3)Make sure you buy your policy through a licensed agent/broker.\r\n<br><br>\r\n4)Most importantly, read the insurance form thoroughly. Go through all the term and conditions, ask questions from your agent about what policy covers and what not, and buy only when completely satisfied with the services offered.\r\n<br><br>\r\n4) Be very honest while filling the insurance form, any misinformation might render you ineligible for compensation.\r\n<br><br>\r\n5) Ask your insurer/intermediary to explain the basis for deciding the sum assured.\r\n<br><br>\r\n<b>DON\'Ts</b>\r\n<br><br>\r\n1) Don\'t allow anyone else to fill your form.\r\n<br><br>\r\n2)Don\'t leave any column blank, also, never sign an unfilled form.\r\n<br><br>\r\n3) Don\'t conceal / mistake any facts about existing medical condition (while buying health insurance) or about the property to be insured.\r\n<br><br>\r\n4) Don\'t mention the incorrect value of your property, concealing any facts might cause disputes at the time of claims.\r\n<br><br>\r\nAlso,visit official website of IRDA to get more knowledge before buying any insurance.\r\n<br><br>\r\n<b>Certifications for Insurance</b>\r\n<br><br>\r\n\"CERTIFICATIONS FOR INSURANCE\r\n<br><br>\r\nBelow given is the brief of various Certificate / Diploma Courses offered jointly, for more details please refer to latest\r\n<br><br>\r\nExamination Hand Book and Syllabus on our website.\r\n<br><br>\r\n1. Diploma & Advanced Diploma in Life Insurance Underwriting is being offered jointly by Insurance Institute of India with Association of Insurance Underwriters (AIU).\r\n<br><br>\r\na. Diploma on Life Insurance Underwriting\r\n<br><br>\r\nAlong with Life Assurance Underwriting subject, this diploma deals with Legal and Regulatory aspects for\r\n<br><br>\r\nLife Insurance Underwriters and Fundamentals of Medical Underwriting.\r\n<br><br>\r\nb. Advanced Diploma on Life Insurance Underwriting\r\n<br><br>\r\nThis is advanced diploma on Life Insurance Underwriting, which deals with Intermediate Medical & Non-\r\n<br><br>\r\nMedical Life Insurance Underwriting & Advanced Life Insurance Underwriting.\r\n<br><br>\r\n2. Certificate Course on Compliance, Governance and Risk Management in Insurance is offered by Indian Institute of Insurance (III) with “The Institute of Company Secretaries of India (ICSI)”\r\n<br><br>\r\nThe course is divided in 2 parts :\r\n<br><br>\r\n1) Online Examination\r\n<br><br>\r\n2) Class room training of 3 days.\r\n<br><br>\r\nAbove course is concerned with Fundamentals of Insurance, Insurance Regulations, Governance and Compliance and Risk\r\n<br><br>\r\nManagement in Insurance.\"\r\n<br><br>\r\nExaminations for Insurance\r\n<br><br>\r\n\"EXAMINATIONS\r\n<br><br>\r\nOn behalf of \"\"Insurance Regulatory and Development Authority of India\"\" Insurance Institute of India conducts pre recruitment test for insurance advisors\r\n<br><br>\r\n1)LICENTIATE EXAMINATION\r\n<br><br>\r\nThis is an introductory course dealing with the two compulsory papers\r\n<br><br>\r\ni) Principles of Insurance\r\n<br><br>\r\nii) Practice of Insurance (Life and Non-Life)\r\n<br><br>\r\nThere is one extra optional examination from professional exam curriculum.\r\n<br><br>\r\n2)ASSOCIATESHIP EXAMINATION\r\n<br><br>\r\nAt this level, students may have an option to choose subjects, either Life or Non-Life or both.\r\n<br><br>\r\n3)FELLOWSHIP EXAMINATION\r\n<br><br>\r\nThis is the highest level of examination which involves advanced studies and in-depth knowledge of specified areas.\"\r\n<br><br>\r\n\"Who can appear for exams\r\n<br><br>\r\nAs per the rules and regulations laid down by Insurance Regulatory and Development Authrity a person willing to get or renew a license to act as an Insurance agent shall possess:\r\n<br><br>\r\na)Minimum qualification of a pass in 12th standard or equivalent examination conducted by any recognized Board/Institution\r\n<br><br>\r\nb) The applicant resides in a place with a population of five thousand or more as per the last census, and a pass in 10th standard or equivalent examination from a recognized Board/Institution if the applicant resides in any other place.\r\n<br><br>\r\nc) Complete 50 hours of training from an approved institution in case the candidate is applying for agency license for the first time, and 25 hours of training in case the candidate is seeking renewal of license.\r\n<br><br>\r\nd) Candidate who is seeking license for the first time to act Life or General insurance agent has to complete 75 hours of training.\"', '21_12_29_02_38_39home-insurance-getty.jpg', '21_12_29_02_38_39How_does_life_insurance_work_526_230_P_LI_026.svg'),
(33, 'About Us', 'Why BrokersBazaar ', '21_12_29_02_52_36in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Why brokers bazaar?', '\"i) Everyone\'s needs are acknowledged\r\n<br><br>\r\nWe have something for everyone, be it Brokers, Authorised Person or investors.\r\n<br><br>\r\n<b>Brokers :- </b>Share market is a simple place with complex, and at times intimidating set of rules and regulations. Some of these might not be in your knowledge too, even after a healthy experience. Since learning is an ever going process, enhance your knowledge via our blogs and seminars, stay updated and make a name for yourself at this platform.\r\n<br><br>\r\n<b>Authorised Person:- </b>Now these are one of those hardworking guys who are ever brought to notice or get much appreciation besides their usual commission. Good news for you guys, a software designed especially keeping you in mind,to keep your identity intact along with your hard work. We will encourage you for education and entrepreneurship, in order to grow and expand your reach.\r\n<br><br>\r\n<b>Investors :-</b> Compare brokers on the basis of reviews, ratings, your preferences (location, services etc). Also get a platform to interact with some very experienced professionals in order to know how to diversify your investments or getting queries resolved.\r\n<br><br>\r\n<b>ii) Want a loan with lesser headache, we are here to your rescue. :-</b> No need following banks to get lowest possible interest rates or chasing bank officials to get your loan files evaluated Compare services from a range of of banks and NBFCs (Non Banking Financial Company) and save your efforts. Use our Span Calculator, Margin reports, EMI calculator & Loan eligibility calculators to just ease your way out. Very simplified, isn\'t it?\r\n<br><br>\r\n<b>iii) Compare, Research and Decide:-</b> When it comes to money, we suggest you to trust no one,but yourself. We provide you with some very smart search and compare tools, with filters designed especially for you, so that you can choose your broker from a thousand listed brokers as per your convenience,be it location-wise or services wise. Read from hundreds of reviews available about the listed brokers to make up your mind, and invest only when you are satisfied to the fullest.\r\n<br><br>\r\n<b>iv) Our expertise, your Growth:-</b> With our experience and knowledge, we will always be available for providing the information you need to know what actually is most beneficial for you, be it loans or stocks. With our experience at your side, it is less likely for you to be fooled by someone in the market. Also, your horizons will broaden and understanding about the market will become much more realistic and logical.\r\n<br><br>\r\n<b>v) Always there for you:-</b> Want help, stuck in shares, feel like being tricked by your broker? Don\'t worry, we have got your back. We will provide you with some of the very experienced professionals in finance as well as legal matters so that their advice helps you find a way out. Plus get all the information you want about the shares- what are actually shares, how share markets works, how to invest smartly etc here at Brokers Bazaar.\r\n<br><br>\r\n<b>vi) Get ahead :-</b> We bring the finance and stock market from stone age to digital era. Become a part of growth and get ahead of others with us.\r\n<br><br>\r\n<b>vii) Simple, smart and quick decision making :-</b> Our online platform helps you take a well informed decision in a simple and convenient manner.\r\n<br><br>\r\n<b>viii) No disturbances :-</b> Cold calls, spamming, void promises, delays- not here at least. We never disclose our users\' contact details with anyone. Plus you don\'t need to call us again and again for information (no delays as we mentioned ), just personalise your mode of getting the info (via email, call or message), in order to avoid any inconvenience.\r\n<br><br>\r\n<b>ix) No intermediaries:-</b> We believe in establishing a direct contact between the customers and service providers ( loan applicants and banks, or the investors between brokers). So no intermediaries, no worries, no misinformation and only smooth sailing.\r\n<br><br>\r\n<b>x) Get to know what people think:-</b> Well this is the thing that makes choosing amongst thousands of brokers or several banks easy- customers\' opinion. Don\'t follow what we say, just pay attention to the customers\' reviews and ratings while choosing a broker or while getting a loan financed.\r\n<br><br>\r\n<b>xi) Savings on everything :-</b> Be it paperwork, efforts, time or money, we help to make sure you save it all.\r\n<br><br>\r\n<b>xii) Your own space :-</b> Give your valuable suggestions, reviews and ratings in order to make this whole platform more transparent and user friendly.\r\n<br><br>\r\nAnd the best part, the services we provide don\'t cost you a penny. Yes, search, compare, look for loans, brokers, increase your knowledge, stay updated about the market, at just one click, all for free, unlike those traditional financial planners always looking to make a dent on your pockets.\r\n<br><br>\r\nEverything is very simplified, just similar to online shopping. Get your loans, search for brokers or seek financial advice here, and make your money worth more with us. \"', '21_12_29_02_52_36Finance-Guru-Personal-Loan.webp', '21_12_29_02_52_36stock-brokers-header-image-2.png'),
(35, 'Education', 'Certification', '21_12_29_03_06_00in-liquid-3-bg.png', 'We have something for everyone, be it Brokers, Authorised Person or investors.', 'Certification', '\r\n\r\n\r\nComming soon...', '21_12_29_03_06_00istockphoto-1221240925-612x612.jpg', '21_12_29_03_06_00coming-soon5.png');

-- --------------------------------------------------------

--
-- Table structure for table `payment_logs`
--

CREATE TABLE `payment_logs` (
  `id` int(222) NOT NULL,
  `payment_id` varchar(222) DEFAULT NULL,
  `amount` varchar(222) NOT NULL,
  `status` varchar(222) NOT NULL,
  `bank_name` varchar(222) DEFAULT NULL,
  `reponse_msg` varchar(222) DEFAULT NULL,
  `signature_hash` varchar(222) DEFAULT NULL,
  `order_id` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `contact` varchar(222) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_logs`
--

INSERT INTO `payment_logs` (`id`, `payment_id`, `amount`, `status`, `bank_name`, `reponse_msg`, `signature_hash`, `order_id`, `email`, `contact`, `package_id`, `payment_date`) VALUES
(142, 'pay_IZdLjIwHj8D3My', '0', 'captured', NULL, NULL, NULL, 'order_IZdLA8A6bOTh4x', 'kartikya27@gmail.com', '+919891805062', 1, '2021-12-12 15:11:00'),
(143, 'pay_IZdfXZuEAt1Bh3', '100', 'captured', NULL, NULL, NULL, 'order_IZdfLHEeB6PCq4', 'kartikya27@gmail.com', '+919891805062', 3, '2021-12-21 15:11:03'),
(144, 'pay_Idi1ABIMmWFBTe', '50', 'captured', NULL, NULL, NULL, 'order_Idi0teF8NXZsJC', 'parveenranga21@gmail.com', '+919891805062', NULL, NULL),
(145, 'pay_Ied4Hzalk35pPb', '50', 'captured', NULL, NULL, NULL, 'order_IecwZQoBUY1XPm', 'enigmamigo@gmil.com', '+919873015158', NULL, NULL),
(146, 'pay_ImjRkbJ4Qq7ZVu', '50', 'captured', NULL, NULL, NULL, 'order_ImjREFUM895pPI', 'parveenranga21@gmail.com', '+919817909197', NULL, NULL),
(147, 'pay_ImjW9xLQL6HG7t', '50', 'captured', NULL, NULL, NULL, 'order_ImjVrkxq5y9jZI', 'parveenranga21@gmail.com', '+919817909197', NULL, NULL),
(148, 'pay_ImjpXz3wSHsyjc', '50', 'captured', NULL, NULL, NULL, 'order_ImjpIHlrlpDKMy', 'parveenranga21@gmail.com', '+919891805062', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subMenu`
--

CREATE TABLE `subMenu` (
  `id` int(211) NOT NULL,
  `Menu_name` varchar(211) NOT NULL,
  `menu_category` varchar(122) NOT NULL,
  `page` varchar(211) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subMenu`
--

INSERT INTO `subMenu` (`id`, `Menu_name`, `menu_category`, `page`) VALUES
(1, 'Why BrokersBazaar', 'About Us', 'Home_page'),
(2, 'Our Team', 'About Us', 'Home_page'),
(3, 'Career With Us', 'About Us', 'Home_page'),
(4, 'Vision', 'About Us', 'Home_page'),
(5, 'Search And Compare', 'Services', 'Home_page'),
(6, 'E-KYC', 'Services', 'Home_page'),
(7, 'Legal and Compliances', 'Services', 'Home_page'),
(8, 'Investment Ideas', 'Services', 'Home_page'),
(9, 'Verfication', 'Services', 'Home_page'),
(10, 'Certification', 'Education', 'Home_page'),
(11, 'Stock Market', 'Education', 'Home_page'),
(12, 'Mutual Funds', 'Education', 'Home_page'),
(13, 'Compliance', 'Education', 'Home_page'),
(14, 'Insurance', 'Education', 'Home_page'),
(15, 'Research', 'Education', 'Home_page'),
(16, 'How To Choose Your Service Provider', 'Guide For Investors', 'Home_page'),
(17, 'Investment FAQ', 'Guide For Investors', 'Home_page'),
(18, 'How to Compare?', 'Stock Brokars', 'Home_page'),
(19, 'Business Loan', 'Loan', 'Home_page'),
(20, 'Education Loan', 'Loan', 'Home_page'),
(21, 'Loan Against Property', 'Loan', 'Home_page'),
(22, 'Loan Against Securities', 'Loan', 'Home_page'),
(23, 'Personal Loan', 'Loan', 'Home_page'),
(24, 'Housing Loan', 'Loan', 'Home_page'),
(25, 'SME Loan', 'Loan', 'Home_page'),
(26, 'Startup Loan', 'Loan', 'Home_page'),
(27, 'Services', 'Services', 'Home_page'),
(28, 'Guide For Investors', 'Guide For Investors', 'Home_page'),
(29, 'Stock Brokars', 'Stock Brokars', 'Home_page'),
(30, 'Support', 'Support', 'Home_page'),
(31, 'News and Reviews', 'News & Reviews', 'Home_page'),
(32, 'How It Works', 'How It Works', 'Home_page'),
(33, 'Loan', 'Loan', 'Home_page'),
(34, 'Education', 'Education', 'Home_page');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `msg`, `img`, `position`) VALUES
(1, 'Kartik', 'This is dummy', 'sky_test.png', 'founder');

-- --------------------------------------------------------

--
-- Table structure for table `userbase`
--

CREATE TABLE `userbase` (
  `id` int(222) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `phone` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `annualIncome` varchar(222) DEFAULT NULL,
  `password` varchar(222) DEFAULT NULL,
  `AuthToken` text,
  `userImage` varchar(200) DEFAULT NULL,
  `Address` varchar(222) DEFAULT NULL,
  `city` varchar(222) DEFAULT NULL,
  `doc_type` varchar(222) DEFAULT NULL,
  `filename` varchar(222) DEFAULT NULL,
  `addressVerificationStatus` varchar(222) NOT NULL DEFAULT 'Not Verified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbase`
--

INSERT INTO `userbase` (`id`, `name`, `phone`, `email`, `dob`, `annualIncome`, `password`, `AuthToken`, `userImage`, `Address`, `city`, `doc_type`, `filename`, `addressVerificationStatus`) VALUES
(8, 'kartik Sen', '9876543210', 'kartikya27@gmail.com', '2015-01-04', '15 lakhs +', 'a', '1022014330615c4fd315744', 'kartikya27@gmail.com18_12_21user.jpg', 'H2 ground floor rajouri garden ', 'Delhi', 'Aadhar', 'kartikya27@gmail.com24_12_21green.jpeg', 'Pending'),
(12, 'Ravi', '9898982255', 'ravij@gmail.com', NULL, NULL, '1d72310edc006dadf2190caad5802983', '159647347261ebb070dfc40', NULL, NULL, NULL, NULL, NULL, 'Not Verified');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phn` varchar(244) NOT NULL,
  `street_1` varchar(255) NOT NULL,
  `street_2` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `email`, `name`, `phn`, `street_1`, `street_2`, `landmark`, `pin`, `city`, `state`, `country`) VALUES
(4, 'parveenranga21@gmail.com', 'parveen kumar', '09891805062', 'iskills c5 lower ground floor rajouri garden delhi 110027 near kukreja hospital opp metro piller no. 417', 'sdf', 'Near Hanuman Mandir', '110027', 'delhi', 'delhi', 'India'),
(2, ' ravik@gmail.com', 'RaviShankar', '978968767', 'Hno 123 New Ashok nagar Delhi', 'fsd', 'Near Hanuman Mandir', '110044', 'New Delhi', 'Delhi', 'India'),
(3, ' ravik@gmail.com', 'RaviShankar', '978968767', 'Hno 123 New Ashok nagar Delhi', 'fsd', 'Near Hanuman Mandir', '110044', 'New Delhi', 'Delhi', 'India'),
(5, 'parveenranga21@gmail.com', 'Ravi kumar', '09817909197', 'Hno 123 New Ashok nagar Delhio, Hno 888/A', 'Hno 888/A', 'Near Bus Stop', '110044', 'New Delhi', 'Delhi', 'India'),
(6, 'weddingcrafters.in@gmail.com', 'Rohan N Divkar', '08007695165', 'Mazalwaddo', '1115', 'Near orchard stores ', '403509', 'Anjuna', 'Goa', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(255) NOT NULL,
  `uniqueID` varchar(244) DEFAULT NULL,
  `userImage` varchar(222) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(232) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `doc_type` varchar(222) DEFAULT NULL,
  `filename` varchar(222) DEFAULT NULL,
  `addressVerificationStatus` varchar(222) NOT NULL DEFAULT 'Not Verified',
  `type` varchar(255) DEFAULT NULL,
  `broker_name` varchar(222) DEFAULT NULL,
  `AuthToken` varchar(255) NOT NULL,
  `currentSelectedPlan` varchar(222) DEFAULT NULL,
  `services` varchar(250) DEFAULT NULL,
  `aboutVendor` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `uniqueID`, `userImage`, `name`, `email`, `password`, `company_name`, `phone`, `Address`, `city`, `pin`, `state`, `doc_type`, `filename`, `addressVerificationStatus`, `type`, `broker_name`, `AuthToken`, `currentSelectedPlan`, `services`, `aboutVendor`) VALUES
(62, '61b0e9b8c0174', NULL, 'pankaj', 's.pankaj.kumar@gmail.com', '123@123', 'abc', '9873015154', 'adf', 'New Delhi', '110017', 'New Delhi', NULL, NULL, 'Not Verified', 'Sub-Broker', 'Broker 1', '111382403961b0e9b8c017b', NULL, NULL, NULL),
(50, '615ae76542249', NULL, 'VIKESH KATARIA', 'ty@s.com', '123', 'Brokers Bazaar', '+917503031828', 'B-80/1, 1st Floor,', 'New Delhi', '110017', 'DELHI', NULL, NULL, 'Not Verified', 'Broker', NULL, '2110asf55a6sf85d0614686c7ab4', NULL, NULL, 'I am providing the services for Loan .'),
(71, '61ebc9b118713', NULL, 'Praveen', 'parveenranga21@gmail.com', 'a01610228fe998f515a72dd730294d87', 'DD', '9891805062', 'Hno 123 New Ashok nagar Delhi', 'New Delhi', '110044', 'Delhi', NULL, NULL, 'Not Verified', 'Broker', 'Selcet Your Broker', '25064271261ebc9b11871a', NULL, NULL, 'I am Praveen'),
(64, '61bcad89e2170', 'kartikya27@gmail.com24_12_21ceo.jpg', 'Mayur Sen', 'kartikya27@gmail.com', 'a', 'DeviceDisk', '7014875375', 'Malviya nagar Delhi', 'Delhi NCR', '110016', 'NCR', 'Aadhar', 'kartikya27@gmail.com24_12_21about.jpeg', 'Pending', 'Broker', 'Selcet Your Broker', '45472099961bcad89e2178', NULL, 'Broker,service3', 'I am Praveen'),
(60, '616853c559656', NULL, 'kartik mandothiya', 'kartikey.maandothiya@gmail.com', 'a', 'AD', '9999999999', 'Delhi', 'Delhi', '110016', 'Delhi', NULL, NULL, 'Not Verified', 'Broker', 'Selcet Your Broker', '347717622616853c55965c', NULL, NULL, NULL),
(61, '61700fa2ac692', NULL, 'Pankaj Kumar', 'mail2devicedisk@gmail.com', '123@123', 'AA', '9873015155', 'J 1/9b, Khirki extn.', 'New Delhi', '110017', 'New Delhi', NULL, NULL, 'Not Verified', 'Sub-Broker', 'Broker 1', '128504035661700fa2ac698', NULL, NULL, NULL),
(65, '61bdf6631e5bf', NULL, 'Pankaj Sinha', 'pankajkumarsinha1@rediffmail.com', '123@123', 'AA', '9873015153', 'J 1/9b, Khirki extn., Malviya nagar', 'New Delhi', '110017', 'DELHI', NULL, NULL, 'Not Verified', 'Sub-Broker', 'Broker 1', '91401477361bdf6631e5c6', NULL, NULL, NULL),
(66, '61c1b931874e2', NULL, 'Vikesh Kumar Kataria', 'kataria.vikesh@gmail.com', 'vksh123', 'Brokersbazaar', '7503031828', 'WZ-1544', 'South West Delhi', '110046', 'Delhi', NULL, NULL, 'Not Verified', 'Wealth Manager', 'Selcet Your Broker', '182249412461c1b931874e9', NULL, NULL, NULL),
(69, '61d0c812eacb1', NULL, 'Pankaj Kumar', 'enigmamigo@gmail.com', '123@123', 'AA', '9873015158', 'J 1/9b, Khirki extn., Malviya nagar', 'New Delhi', '110017', 'DELHI', NULL, NULL, 'Not Verified', 'Sub-Broker', 'Broker 1', '73799010261d0c812eacb6', NULL, 'business loan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendorConnection`
--

CREATE TABLE `vendorConnection` (
  `id` int(211) NOT NULL,
  `vendorID` varchar(211) NOT NULL,
  `vendorUniqeID` varchar(222) DEFAULT NULL,
  `userName` varchar(211) NOT NULL,
  `userEmail` varchar(222) NOT NULL,
  `status` varchar(200) NOT NULL,
  `date` date DEFAULT NULL,
  `servicefor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendorConnection`
--

INSERT INTO `vendorConnection` (`id`, `vendorID`, `vendorUniqeID`, `userName`, `userEmail`, `status`, `date`, `servicefor`) VALUES
(27, 'kartikey.maandothiya@gmail.com', '616853c559656', 'kartik', 'kartikya27@gmail.com', 'approved', '2021-12-23', NULL),
(28, 'parveenranga21@gmail.com', '6166ad4c69649', 'kartik', 'kartikya27@gmail.com', 'approved', '2021-12-23', NULL),
(29, 's.pankaj.kumar@gmail.com', '61b0e9b8c0174', 'kartik', 'kartikya27@gmail.com', 'pending', '2021-12-23', NULL),
(30, 'kartikya27@gmail.com', '61bcad89e2170', 'kartik', 'kartikya27@gmail.com', 'approved', '2021-12-23', NULL),
(31, 'enigmamigo@gmail.com', '61d0c812eacb1', 'kartik Sen', 'kartikya27@gmail.com', 'pending', '2022-01-01', NULL),
(37, 'ty@s.com', '615ae76542249', 'kartik Sen', 'kartikya27@gmail.com', 'pending', '2022-01-04', 'Loan');

-- --------------------------------------------------------

--
-- Table structure for table `vendorDetails`
--

CREATE TABLE `vendorDetails` (
  `id` int(211) NOT NULL,
  `email` varchar(211) NOT NULL,
  `license` varchar(211) DEFAULT NULL,
  `brokerage_commission` varchar(211) DEFAULT NULL,
  `Equity_SEBI_Registration_No` varchar(211) DEFAULT NULL,
  `gst` varchar(211) DEFAULT NULL,
  `Exchange_Registration_Nos` varchar(211) DEFAULT NULL,
  `NSE_TM_CODE` varchar(211) DEFAULT NULL,
  `NSE_clr_no` varchar(211) DEFAULT NULL,
  `BSE_Clearing_No` varchar(211) DEFAULT NULL,
  `MSEI_TM_Code` varchar(211) DEFAULT NULL,
  `Clearing_No` varchar(211) DEFAULT NULL,
  `MCX_TM_No` varchar(211) DEFAULT NULL,
  `mcx_Clearing_No` varchar(211) DEFAULT NULL,
  `NCDEX_TM_No` varchar(211) DEFAULT NULL,
  `ncdx_Clearing_No` varchar(211) DEFAULT NULL,
  `ICEX_TM_ID` varchar(211) DEFAULT NULL,
  `SEBI_Registration_for_DP` varchar(211) DEFAULT NULL,
  `NSDL_DP_ID` varchar(211) DEFAULT NULL,
  `CDSL_DP_ID` varchar(211) DEFAULT NULL,
  `SEBI_Research_Analysts_No` varchar(211) DEFAULT NULL,
  `SEBI_PMS_Registration_No` varchar(211) DEFAULT NULL,
  `CMBPID_NCL_CM` varchar(211) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendorDetails`
--

INSERT INTO `vendorDetails` (`id`, `email`, `license`, `brokerage_commission`, `Equity_SEBI_Registration_No`, `gst`, `Exchange_Registration_Nos`, `NSE_TM_CODE`, `NSE_clr_no`, `BSE_Clearing_No`, `MSEI_TM_Code`, `Clearing_No`, `MCX_TM_No`, `mcx_Clearing_No`, `NCDEX_TM_No`, `ncdx_Clearing_No`, `ICEX_TM_ID`, `SEBI_Registration_for_DP`, `NSDL_DP_ID`, `CDSL_DP_ID`, `SEBI_Research_Analysts_No`, `SEBI_PMS_Registration_No`, `CMBPID_NCL_CM`) VALUES
(7, 'parveenranga21@gmail.com', 'dsfa', 'dfs', 'sdf', 'mysst', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'kartikey.maandothiya@gmail.com', '123456', '12', '1234', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'mail2devicedisk@gmail.com', '11', '5', '22', '2345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', NULL, NULL, NULL, NULL),
(12, 'kartikya27@gmail.com', '123', '456', '789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'pankajkumarsinha1@rediffmail.com', '123', '5', '12345', '567', '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'kataria.vikesh@gmail.com', 'fadfadf45465456', '5%', 'ad45f4a]f4a5fd4a56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'parveenranga21@gmail.com', 'fdf', 'gdfg', 'fghfg', NULL, NULL, NULL, NULL, 'dsfds', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'enigmamigo@gmail.com', '123', '12', '345', '2345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'parveenranga21@gmail.com', 'fdf', 'gdfg', 'fghfg', NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'parveenranga21@gmail.com', 'fdf', 'dfs', 'fghfg', NULL, 'sdfsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendorHomePage`
--

CREATE TABLE `vendorHomePage` (
  `id` int(11) NOT NULL,
  `bannerTitle` varchar(200) DEFAULT NULL,
  `bannerImage` varchar(200) DEFAULT NULL,
  `bannerText` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendorServices`
--

CREATE TABLE `vendorServices` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendorServices`
--

INSERT INTO `vendorServices` (`id`, `title`, `remarks`) VALUES
(1, 'Broker', 'None'),
(2, 'Financial Advisor', 'None'),
(3, 'service3', 'None'),
(4, 'service4', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutUs`
--
ALTER TABLE `aboutUs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Package`
--
ALTER TABLE `Package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pageContent`
--
ALTER TABLE `pageContent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_logs`
--
ALTER TABLE `payment_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subMenu`
--
ALTER TABLE `subMenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbase`
--
ALTER TABLE `userbase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqueID` (`uniqueID`);

--
-- Indexes for table `vendorConnection`
--
ALTER TABLE `vendorConnection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendorDetails`
--
ALTER TABLE `vendorDetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendorHomePage`
--
ALTER TABLE `vendorHomePage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendorServices`
--
ALTER TABLE `vendorServices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutUs`
--
ALTER TABLE `aboutUs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Package`
--
ALTER TABLE `Package`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pageContent`
--
ALTER TABLE `pageContent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment_logs`
--
ALTER TABLE `payment_logs`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `subMenu`
--
ALTER TABLE `subMenu`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userbase`
--
ALTER TABLE `userbase`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `vendorConnection`
--
ALTER TABLE `vendorConnection`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `vendorDetails`
--
ALTER TABLE `vendorDetails`
  MODIFY `id` int(211) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vendorHomePage`
--
ALTER TABLE `vendorHomePage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendorServices`
--
ALTER TABLE `vendorServices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
