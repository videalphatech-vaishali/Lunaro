import { __ } from '@wordpress/i18n';
import { useBlockProps, RichText, MediaUpload } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';

export default function Edit({ attributes, setAttributes }) {
  const { boxes, bottomText } = attributes;
  const blockProps = useBlockProps({ className: 'contact-boxes-section' });

  const updateBox = (index, field, value) => {
    const newBoxes = [...boxes];
    newBoxes[index][field] = value;
    setAttributes({ boxes: newBoxes });
  };

  return (
    <div {...blockProps}>
      <div className="contact-row-body">
        <div className="grid gap-10 md:grid-cols-2 lg:grid-cols-3 mb-16">
          {boxes.map((box, index) => (
            <div
              key={index}
              className="bg-[#FFF4E433] p-6 rounded-3xl shadow-lg border border-gray-700 hover:border-purple-500 transition"
            >
              <div className="flex items-center justify-center w-12 h-12 rounded-full bg-[#A89469] mb-4">
                <MediaUpload
                  onSelect={(media) => updateBox(index, 'icon', media.url)}
                  render={({ open }) => (
                    <>
                      {box.icon ? (
                        <img
                          src={box.icon}
                          alt=""
                          style={{ cursor: 'pointer', width: '32px' }}
                          onClick={open}
                        />
                      ) : (
                        <Button onClick={open} variant="primary">
                          Upload Icon
                        </Button>
                      )}
                    </>
                  )}
                />
              </div>

              <RichText
                tagName="h3"
                className="text-2xl font-bold mb-4"
                value={box.title}
                onChange={(value) => updateBox(index, 'title', value)}
                placeholder="Enter title..."
              />
              <RichText
                tagName="p"
                className="text-gray-300 text-sm leading-relaxed"
                value={box.text}
                onChange={(value) => updateBox(index, 'text', value)}
                placeholder="Enter description..."
              />
            </div>
          ))}
        </div>
      </div>

      <RichText
        tagName="h3"
        className="bottom-text"
        value={bottomText}
        onChange={(value) => setAttributes({ bottomText: value })}
        placeholder="Enter bottom text..."
      />
    </div>
  );
}
