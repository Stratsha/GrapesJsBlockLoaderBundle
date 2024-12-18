interface IBlockAttributes {
    class: string; 
}

interface IBlockItem {
    label: string;
    category: string;
    attributes: IBlockAttributes;
    content: string;
}

export {
    type IBlockAttributes,
    type IBlockItem
}
