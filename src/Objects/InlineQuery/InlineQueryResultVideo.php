<?php

namespace Telegram\Bot\Objects\InlineQuery;

/**
 * Class InlineQueryResultVideo.
 *
 * Represents a link to a page containing an embedded video player or a video file. By default,
 * this video file will be sent by the user with an optional caption. Alternatively, you can
 * use input_message_content to send a message with the specified content instead of the video.
 *
 * If an InlineQueryResultVideo message contains an embedded video (e.g., YouTube), you must
 * replace its content using input_message_content.
 *
 * <code>
 * [
 *   'id'                     => '',  //  string                - Required. Unique identifier for this result, 1-64 bytes
 *   'video_url'              => '',  //  string                - Required. A valid URL for the embedded video player or video file
 *   'mime_type'              => '',  //  string                - Required. Mime type of the content of video url, “text/html” or “video/mp4”
 *   'thumb_url'              => '',  //  string                - Required. URL of the thumbnail (jpeg only) for the video
 *   'title'                  => '',  //  string                - Required. Title for the result
 *   'caption'                => '',  //  string                - (Optional). Caption of the video to be sent, 0-200 characters
 *   'parse_mode'             => '',  //  string                - (Optional). Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 *   'video_width'            => '',  //  int                   - (Optional). Video width
 *   'video_height'           => '',  //  int                   - (Optional). Video height
 *   'video_duration'         => '',  //  int                   - (Optional). Video duration in seconds
 *   'description'            => '',  //  string                - (Optional). Short description of the result
 *   'reply_markup'           => '',  //  InlineKeyboardMarkup  - (Optional). Inline keyboard attached to the message
 *   'input_message_content'  => '',  //  InputMessageContent   - (Optional). Content of the message to be sent instead of the photo
 * ]
 * </code>
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultvideo
 *
 * @method $this id($string)                     Required. Unique identifier for this result, 1-64 bytes
 * @method $this videoUrl($string)               Required. A valid URL for the embedded video player or video file
 * @method $this mimeType($string)               Required. Mime type of the content of video url, “text/html” or “video/mp4”
 * @method $this thumbUrl($string)               Required. URL of the thumbnail (jpeg only) for the video
 * @method $this title($string)                  Required. Title for the result
 * @method $this caption($string)                (Optional). Caption of the video to be sent, 0-200 characters
 * @method $this parseMode($string)              (Optional). Send Markdown or HTML, if you want Telegram apps to show bold, italic, fixed-width text or inline URLs in the media caption.
 * @method $this videoWidth($int)                (Optional). Video width
 * @method $this videoHeight($int)               (Optional). Video height
 * @method $this videoDuration($int)             (Optional). Video duration in seconds
 * @method $this description($string)            (Optional). Short description of the result
 * @method $this replyMarkup($object)            (Optional). Inline keyboard attached to the message
 * @method $this inputMessageContent($object)    (Optional). Content of the message to be sent instead of the photo
 */
class InlineQueryResultVideo extends AbstractInlineObject
{
    protected string $type = 'video';
}
