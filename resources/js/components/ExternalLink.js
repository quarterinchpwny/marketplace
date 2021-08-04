function ExternalLink({ link, message }) {
  window.location.href = link; 
  return message;
}

export default ExternalLink;