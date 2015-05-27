<script>
	window.onload = function () {
		var eucookielaw_trad = {
			it: {
				messaggio: "Questo sito o gli strumenti terzi da questo utilizzati si avvalgono di cookie necessari al funzionamento ed utili alle finalità illustrate nella cookie policy. <br>Se vuoi saperne di più o negare il consenso a tutti o ad alcuni cookie, consulta la cookie policy.<br>Chiudendo questo banner, scorrendo questa pagina, cliccando su un link o proseguendo la navigazione in altra maniera, acconsenti all'uso dei cookie.<br>",
				close_message_text: "Accetta e chiudi",
				privacy_link_text: "Cookie Policy",
				link : 'http://www.bolinasail.it/it/content/2-cookie-policy'
			},
			en: {
				messaggio: "This website or third-party tools used in this make use of cookies required to operate and useful for the purposes described in the cookie policy. <br> If you want to learn more or opt out of all or some cookies, visit our cookies policy. <br> Closing this banner, scrolling through this page, clicking on a link or continuing navigation in any other way, you consent to 'use of cookies.<br>",
				close_message_text: "Accept and Close",
				privacy_link_text: "Cookie Policy",
				link : 'http://www.bolinasail.it/en/content/2-cookie-policy'
			}
		};
		cookieChoices.showCookieConsentBar(eucookielaw_trad.{$lang_iso}.messaggio, eucookielaw_trad.{$lang_iso}.close_message_text, eucookielaw_trad.{$lang_iso}.privacy_link_text, eucookielaw_trad.{$lang_iso}.link);
	};
</script>